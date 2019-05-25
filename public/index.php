<?php
require '../flight/flight/Flight.php';
require '../PHPExcel/PHPExcel.php';
require '../Email/mail.php';
require '../Database/conexion.php';

date_default_timezone_set('America/Lima');

Flight::route('POST /registro', function () {

    $nombre = Flight::request()->data->name;
    $correo = Flight::request()->data->email;
    $celular = Flight::request()->data->cell;
    $dni = Flight::request()->data->dni;
    $check = Flight::request()->data->check;

    $respuesta = array("response" => false);

    $v_celular = preg_match('/^[2-9][0-9]{8}$/', $celular);
    $v_dni = preg_match('/^\d{8}$/', $dni);
    $v_check = preg_match('/^on$/', $check);
    $v_nombre = preg_match('/^[A-Za-z\ áéíóúÁÉÍÓÚ]{8,100}$/', $nombre);
    $v_correo = preg_match('/^[a-zA-Z0-9+]+(?:([\.\_\-][a-zA-Z0-9+]+))*@(?:([a-zA-Z0-9]+(\-[a-zA-Z0-9]+)*)\.)+[a-zA-Z]+$/', $correo);

    if (!$v_check) {
        $respuesta["error"]["check"] = "Debe seleccionar de forma obligatoria.";
    }

    if (!$v_dni) {
        $respuesta["error"]["dni"] = "Formato no válido.";
    }

    if (!$v_celular) {
        $respuesta["error"]["celular"] = "Formato no válido.";
    }

    if (!$v_nombre) {
        echo $nombre;
        exit;
        $respuesta["error"]["nombre"] = "Formato no válido.";
    }

    if (!$v_correo) {
        $respuesta["error"]["correo"] = "Formato no válido.";
    }

    if (isset($respuesta["error"])) {
        $respuesta["response"] = true;
        return Flight::json($respuesta);
    }

    $model = new Conexion();
    $dni_exit = $model->get_dni($dni);

    if ($dni_exit) {
        $respuesta["response"] = true;
        $respuesta["error"]["dni"] = "El DNI ya se encuentra registrado.";
    } else {
        $datos = array(
            "nombre" => trim(ucwords(strtolower($nombre))),
            "celular" => $celular,
            "dni" => $dni,
            "correo" => $correo
        );
        $respuesta["data"] = $datos;
        $model->insert($datos);
        $email = new Mail();
        $email->envio_correo($datos);
    }
    return Flight::json($respuesta);
});


Flight::route('GET /', function () {
    $model = new Conexion();
    $ganadores = $model->get_ganadores();
    //var_dump($ganadores);
    Flight::render('registro.php', array('ganadores' => $ganadores));
});


Flight::route('GET /exportar_inscritos', function () {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="Mi dominio"');
        header('HTTP/1.0 401 Unauthorized');
        echo '<a href="/">Ir la pagina</a>';
        exit;
    }else {
        if (isset ($_SERVER['PHP_AUTH_USER']) and isset($_SERVER['PHP_AUTH_PW'])) {
            if (($_SERVER['PHP_AUTH_USER']  == USER_DOWNLOAD  ) and
                ($_SERVER['PHP_AUTH_PW'] == PASS_DOWNLOAD)
            ) {
                $objPHPExcel = new PHPExcel();
                $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                    ->setLastModifiedBy("Maarten Balliauw")
                    ->setTitle("Reporte de Participantes")
                    ->setSubject("Reporte")
                    ->setDescription("Participantes registrados")
                    ->setKeywords("office PHPExcel php")
                    ->setCategory("Participantes");

                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    ),
                    'borders' => array(
                        'outline' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('argb' => '00000000'),
                        ),
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startcolor' => array(
                            'argb' => 'FFA0A0A0',
                        ),
                        'endcolor' => array(
                            'argb' => 'FFFFFFFF',
                        ),
                    ),
                );

                $styleArray2 = array(
                    'borders' => array(
                        'outline' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('argb' => '00000000'),
                        ),
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    ),
                );

                $objPHPExcel->getActiveSheet()->setShowGridlines(false);

                $letra = 65;
                while ($letra < 70) {
                    $objPHPExcel->getActiveSheet()->getColumnDimension(chr($letra))->setAutoSize(true);
                    $letra++;
                }

                $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'Nombres')
                    ->setCellValue('B1', 'DNI')
                    ->setCellValue('C1', 'Correo')
                    ->setCellValue('D1', 'Celular')
                    ->setCellValue('E1', 'Fecha Registro');

                $model = new Conexion();
                $participantes = $model->participantes();
                $cont = 2 ;
                foreach ($participantes as $p) {
                    $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValueByColumnAndRow(0, $cont, $p['nombre'])
                        ->setCellValueByColumnAndRow(1, $cont, $p['dni'])
                        ->setCellValueByColumnAndRow(2, $cont, $p['correo'])
                        ->setCellValueByColumnAndRow(3, $cont, $p['celular'])
                        ->setCellValueByColumnAndRow(4, $cont, $p['fecha_registro']);
                    $cont ++;
                }

                $objPHPExcel->getActiveSheet()
                    ->getStyle( 'A1:E1')
                    ->applyFromArray($styleArray);

                $objPHPExcel->getActiveSheet()
                    ->getStyle( 'A2:E'. ($cont - 1) )
                    ->applyFromArray($styleArray2);

                $objPHPExcel->getActiveSheet()->setTitle('Participantes');

                $objPHPExcel->setActiveSheetIndex(0);

                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                header('Content-type: application/vnd.ms-excel');
                header('Content-Disposition: attachment; filename="reporte.xls"');
                $objWriter->save('php://output');
            }
            else{
                header('WWW-Authenticate: Basic realm="Mi dominio"');
                header('HTTP/1.0 401 Unauthorized');
                echo '<a href="/">Ir la pagina</a>';
                exit;
            }
        }
    }
});


Flight::map('notFound', function () {
    echo "Error 404!";
});

Flight::start();

?>

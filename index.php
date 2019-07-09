<?php
require 'lib/flight/flight/Flight.php';
require 'lib/PHPExcel/PHPExcel.php';
require 'Email/mail.php';
require 'Database/conexion.php';

date_default_timezone_set('America/Lima');


require 'app/controller/HomeController.php';
require 'app/controller/Landing1Controller.php';
require 'app/controller/Landing2Controller.php';


function download_send_headers($filename) 
{
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // force download  
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}

function array2csv(array &$array)
{
    if (count($array) == 0) {
        return null;
    }
    ob_start();
    $df = fopen("php://output", 'w');
    foreach ($array as $row) {
        fputcsv($df, $row);
    }
    fclose($df);
    return ob_get_clean();
}

function getData() 
{
    $person = array();
    $model = new Conexion();
    $content = $model->participantes();

    $landing1 = new Landing1Controller();
    $data = $landing1->dataValueForm();

    $person = array(
        array('Nombre', 'Correo', 'Celular', 'Area', 'Mensaje', 'fecha_registro'),
    );

    foreach($content as $item) {
        $person[] = array(
            $item['nombre'],
            $item['correo'],
            $item['celular'],
            $data[$item['area']],
            $item['mensaje'],
            $item['fecha_registro'],
        );
    }

    return $person;

}

Flight::route('GET /exportar', function () {
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


                $array = getData();
                download_send_headers("data_export_" . date("Y-m-d") . ".csv");
                die(array2csv($array));
                exit;


                $objPHPExcel = new PHPExcel();
                $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                    ->setLastModifiedBy("Maarten Balliauw")
                    ->setTitle("Reporte de Clientes potenciales")
                    ->setSubject("Reporte")
                    ->setDescription("Clientes potenciales registrados")
                    ->setKeywords("office PHPExcel php")
                    ->setCategory("Clientes potenciales");

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
                    ->setCellValue('A1', 'ID')
                    ->setCellValue('B1', 'Nombre')
                    ->setCellValue('C1', 'Correo')
                    ->setCellValue('D1', 'Celular')
                    ->setCellValue('E1', 'Area')
                    ->setCellValue('F1', 'Mensaje')
                    ->setCellValue('G1', 'Fecha Registro');

                $model = new Conexion();
                // $participantes = $model->get();
                $participantes = $model->participantes();
                
                // var_dump($participantes);
                // exit;
                $cont = 2 ;
                foreach ($participantes as $p) {

                    // var_dump($p);exit;
                    $objPHPExcel->setActiveSheetIndex(0)
                        ->setCellValueByColumnAndRow(0, $cont, $p['id'])
                        ->setCellValueByColumnAndRow(1, $cont, $p['nombre'])
                        ->setCellValueByColumnAndRow(2, $cont, $p['correo'])
                        ->setCellValueByColumnAndRow(3, $cont, $p['celular'])
                        ->setCellValueByColumnAndRow(4, $cont, $p['area'])
                        ->setCellValueByColumnAndRow(5, $cont, $p['mensaje'])
                        ->setCellValueByColumnAndRow(6, $cont, $p['fecha_registro']);
                    $cont ++;
                }

                $objPHPExcel->getActiveSheet()
                    ->getStyle( 'A1:G1')
                    ->applyFromArray($styleArray);

                $objPHPExcel->getActiveSheet()
                    ->getStyle( 'A2:G'. ($cont - 1) )
                    ->applyFromArray($styleArray2);

                $objPHPExcel->getActiveSheet()->setTitle('Clientes');

                $objPHPExcel->setActiveSheetIndex(0);

                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                header('Content-type: application/vnd.ms-excel');
                header('Content-Disposition: attachment; filename="reporte.xlsx"');
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
    Flight::render('home/404.php');
});

Flight::start();

?>

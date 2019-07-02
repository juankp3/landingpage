<?php 

class Landing1Controller 
{
    public $vModel;

    public function index() 
    {
        // echo phpinfo();exit;
        // $cone = new Conexion();
        // $res = $cone->get();
        // var_dump($res);
        // exit;
        $gallery = $this->gallery();
        Flight::render('landing1/index.php', array('gallery' => $gallery));
    }

    public function gallery()
    {
        $gallery = array(
            array(
                'name' => 'SALAS', 
                'icon' => 'fa-couch',
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'SALA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'SALA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'SALA-3.png'),
                )
            ),
            array(
                'name' => 'COCINA', 
                'icon' => 'fa-blender', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COCINA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COCINA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COCINA-3.png'),
                    array('name' => 'Foto 4', 'image' => 'COCINA-4.png'),
                )
            ),
            array(
                'name' => 'DORMITORIO', 
                'icon' => 'fa-bed', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'DORMITORIO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'DORMITORIO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'DORMITORIO-3.png'),
                )
            ),
            array(
                'name' => 'COMEDOR', 
                'icon' => 'fa-coffee',       
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COMEDOR-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COMEDOR-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COMEDOR-3.png'),
                )
            ),
            array(
                'name' => 'BAÑO', 
                'icon' => 'fa-bath', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'BANO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'BANO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'BANO-3.png'),
                )
            )
        );

        return $gallery;
    }


    public function registro()
    {
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
    }
}

$landing1 = new Landing1Controller();

Flight::route('GET /landing1', array($landing1, 'index'));
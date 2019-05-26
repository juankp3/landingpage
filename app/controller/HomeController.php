<?php 

class HomeController 
{
    public $vModel;

    public function index() 
    {
        Flight::render('home/index.php');
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

$home = new HomeController();

Flight::route('GET /', array($home, 'index'));
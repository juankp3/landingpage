<?php 

class HomeController 
{
    public $vModel;

    public function index() 
    {
        // https://hub.docker.com/_/php
        // echo phpinfo();
        // exit;
        // $cone = new Conexion();
        // $res = $cone->get();
        // var_dump($res);
        // exit;

        Flight::render('home/index.php');
    }
}

$home = new HomeController();

Flight::route('GET /', array($home, 'index'));
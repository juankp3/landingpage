<?php 

class HomeController 
{
    public $vModel;

    public function index() 
    {
        Flight::render('home/index.php');
    }
}

$home = new HomeController();

// Flight::route('GET /', array($home, 'index'));
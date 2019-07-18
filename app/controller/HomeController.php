<?php 

class HomeController 
{
    public $vModel;

    public function index() 
    {
        Flight::render('home/index.php');
    }
}

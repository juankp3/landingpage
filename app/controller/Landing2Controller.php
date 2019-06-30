<?php 

class Landing2Controller 
{
    public $vModel;

    public function index() 
    {
        Flight::render('landing2/index.php');
    }


}

$landing2 = new Landing2Controller();

Flight::route('GET /landing2', array($landing2, 'index'));
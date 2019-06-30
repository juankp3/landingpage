<?php 

class Landing2Controller 
{
    public $vModel;

    public function index() 
    {
        Flight::render('Landing2/index.php');
    }


}

$landing2 = new Landing2Controller();

Flight::route('GET /landing', array($landing2, 'index'));
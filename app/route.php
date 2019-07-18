<?php
require 'controller/HomeController.php';
require 'controller/Landing1Controller.php';
require 'controller/Landing2Controller.php';


$home = new HomeController();
// Flight::route('GET /', array($home, 'index'));

$landing1 = new Landing1Controller();
Flight::route('GET /remodelacion', array($landing1, 'index'));
Flight::route('GET /remodelacion/gracias', array($landing1, 'thanks'));
Flight::route('POST /remodelacion/gracias', array($landing1, 'thanks'));


$landing2 = new Landing2Controller();
Flight::route('GET /', array($landing2, 'index'));
Flight::route('GET /gracias', array($landing2, 'thanks'));
Flight::route('POST /gracias', array($landing2, 'thanks'));
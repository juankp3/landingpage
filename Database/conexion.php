<?php
require "config.php";

class Conexion {

    private $_CON;
    /**
     * Conexion constructor.
     */
    public function __construct()
    {
        // $conex = array(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        // $this->_CON = mysqli_connect($conex[0],$conex[1],$conex[2],$conex[3]);


        // $this->_CON = $mysqli = new mysqli('mysql', 'root', 'toor', 'servife');

        // Flight::register('db', 'mysqli', array('localhost','root','toor','servife'));
        // $this->_CON = Flight::db();
    }

    public function get()
    {
        // $this->_CON->connect();
        // $customers = $this->_CON->query("SELECT * FROM clientes")->fetch_assoc();
        // return $customers;

        Flight::register('db', 'mysqli', array('localhost','root','toor','servife'));

        // Flight::register('db', 'PDO', array('mysql:host=mysql;dbname=servife','root','toor'),
        //     function($db){
        //         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     }
        // );

        // $shared = Flight::db();

        $result = Flight::db()->query("SELECT * FROM clientes");

        // $customers = $shared->query("SELECT * FROM clientes")->fetch_assoc();
        // $customers = array();
        // dump($customers);

        return $result; 
    }


    public function get_dni($dni) {
        $query = "SELECT id  FROM participante WHERE dni = '".$dni."' LIMIT 1";
        return mysqli_fetch_assoc(mysqli_query($this->_CON,$query));
    }

    public function insert($datos){

        $query = "INSERT INTO participante(nombre,dni,celular,correo,fecha_registro) values ".
            "('".$datos['nombre']."','".$datos['dni']."','".$datos['celular']."','".
            $datos['correo']."','".date("Y-m-d H:i:s")."')";
        return mysqli_query($this->_CON,$query);
    }

    public function get_ganadores() {
        $query = "SELECT nombre, dni  FROM participante WHERE ganador = 1 ORDER bY puesto ASC LIMIT 3";
        $result = mysqli_query($this->_CON,$query);
        $data = array();
        while ($d  = mysqli_fetch_assoc($result)) {
            $data[] = $d;
        }
        return $data;
    }

    public function participantes() {
        $query = "SELECT nombre, dni, correo, celular, fecha_registro FROM participante";
        $result = mysqli_query($this->_CON,$query);
        $data = array();
        while ($d  = mysqli_fetch_assoc($result)) {
            $data[] = $d;
        }
        return $data;
    }
}
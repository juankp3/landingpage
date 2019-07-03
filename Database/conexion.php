<?php
require "config.php";

class Conexion {

    private $_CON;
    /**
     * Conexion constructor.
     */
    public function __construct()
    {
        // echo DB_HOST.' - '.DB_NAME.' - '.DB_USER.' - '.DB_PASS;exit;
        Flight::register('db', 'PDO', array('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS));
        // Flight::register('db', 'PDO', array('mysql:host=mysql;dbname=servife', 'user_servife', 'computadora'));
        $this->_CON = Flight::db();
    }

    public function get()
    {
        $customers =$this->_CON->query("SELECT * FROM clientes LIMIT 0, 30")->fetch(PDO::FETCH_ASSOC);
        return $customers;
    }


    public function get_dni($dni) {
        $query = "SELECT id  FROM participante WHERE dni = '".$dni."' LIMIT 1";
        return mysqli_fetch_assoc(mysqli_query($this->_CON,$query));
    }

    public function insert($data) {

        $sql = "INSERT INTO clientes (nombre,correo,celular,area,mensaje,fecha_registro) VALUES(?,?,?,?,?,NOW())";
        $sth = Flight::db()->prepare($sql);
        $sth->bindParam(1, $data["name"]);
        $sth->bindParam(2, $data["email"]);
        $sth->bindParam(3, $data["phone"]);
        $sth->bindParam(4, $data["area"]);
        $sth->bindParam(5, $data["message"]);
        $res = $sth->execute();

        return $res;
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

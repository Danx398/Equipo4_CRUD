<?php 
    $conexion = mysqli_connect('localhost', 'root', '2202', 'Equipo4');
    class Conexion{
        public function conectar(){
            $conexion = new PDO("mysqli:host=localhost:3306;dbname=Equipo4", "root", "2202");
            return $conexion;
        }
    }
?>
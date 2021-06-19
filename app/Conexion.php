<?php 
    $conexion = mysqli_connect('localhost:3306', 'root', '2202', 'Equipo4');
    
    class Conexion2{
        public function conectar(){
            $servidor = "localhost:3306";
            $usuario = "root";
            $password = "2202";
            $baseDeDatos = "Equipo4";
            $conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);
            return $conexion;
        }
    }
    $Conexion = new Conexion2();
    $conectar = $Conexion->conectar();
?>

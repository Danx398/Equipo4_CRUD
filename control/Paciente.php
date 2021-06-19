    
<?php
    include_once "../app/Conexion.php";
    class Persona extends Conexion2{
        public function eliminarPersona($idPersona){
            $Conexion = new Conexion2();
            $conectar = $Conexion->conectar();
                //metodo de eliminacion 
            $sql = "DELETE FROM t_personas WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }
        public function agregarPersona($Nombre, $Apellido, $Edad, $Familiar, $Causa){
            $Conexion = new Conexion2();
            $conectar = $Conexion->conectar();
            $sql= "INSERT INTO paciente (nombre_Pac, Apellido_pac, Edad_pac, NomFam_pac, Causa)
                    VALUES ('$Nombre', '$Apellido', '$Edad','$Familiar', '$Causa')";
            $respuesta = mysqli_query($conectar, $sql);
            
            return $respuesta;
        }
        public function obtenerDatosPersona($idPersona){
            $Conexion = new Conexion2();
            $conectar = $Conexion->conectar();

            $sql = "SELECT id_persona, paterno, materno, nombre FROM t_personas WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            //el contenido de la variable la va a volver arreglo
            $datosObtenidos = mysqli_fetch_array($respuesta);
            //arreglo
            $datosRespuesta = array(
                "id_persona" =>$datosObtenidos['id_persona'],
                "paterno" =>$datosObtenidos['paterno'],
                "materno" =>$datosObtenidos['materno'],
                "nombre" =>$datosObtenidos['nombre']);

            return $datosRespuesta;
        }
        public function actualizarPersona($idPersona, $paterno, $materno, $nombre){
            $Conexion = new Conexion2();
            $conectar = $Conexion->conectar();

            $sql = "UPDATE t_personas SET paterno = '$paterno',materno = '$materno',nombre = '$nombre' 
					WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }

    }
?>
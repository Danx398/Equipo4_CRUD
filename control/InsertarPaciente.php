<?php
    include "../app/Conexion.php";
    include "Paciente.php";
    $Nombre = $_POST['nombre_paciente'];
    $Apellido = $_POST['apellido_paciente'];
    $Edad= $_POST['edad_paciente '];
    $Familiar = $_POST['nom_fam_paciente'];
    $Causa = $_POST['causa_paciente'];
    $Persona = new Persona();
    $respuesta = $Persona->agregarPersona($Nombre, $Apellido, $Edad, $Familiar, $Causa);
    if ($respuesta) {
        header("location: ../view/UiPacientes.php");
    }else{
        echo $respuesta;
    }
?>
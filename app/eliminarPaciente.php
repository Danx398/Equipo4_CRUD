<?php 
    $Cod_pac=$_GET['id'];
    include("Conexion.php");

    $sql= "DELETE FROM paciente where Cod_pac = '".$Cod_pac."'";
    $resultado= mysqli_query($conexion, $sql);
    if($resultado){
        echo " <script>
        alert('Datos Eliminados correctamente');
        location.assign('../view/UiPacientes.php');
        </script>";
    }else{
        echo " <script>
        alert('Datos No Eliminados correctamente');
        location.assign('../view/UiPacientes.php');
        </script>";
    }
 ?>
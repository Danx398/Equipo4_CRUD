<?php 
    $Cod_med=$_GET['id'];
    include("Conexion.php");

    $sql= "DELETE FROM medico where Cod_med = '".$Cod_med."'";
    $resultado= mysqli_query($conexion, $sql);
    if($resultado){
        echo " <script>
        alert('Datos Eliminados correctamente');
        location.assign('../view/UiMedicos.php');
        </script>";
    }else{
        echo " <script>
        alert('Datos No Eliminados correctamente');
        location.assign('../view/UiMedicos.php');
        </script>";
    }
 ?>
<?php
    require_once "../app/crud.php";
    $id=$_POST['id'];
    echo Crud::eliminarDatos($id);
?>
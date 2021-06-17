<?php
    require_once "../app/crud.php";
    $id=$_POST['id'];
    echo json_encode(Crud::obtenerDatos($id));
?>
    
<?php 
    $conexion = mysqli_connect("localhost:3306","root","2202","Equipo4");
    //  Variables con $ el metodo POST se ocupa desde objetos 
    // El metodo GEST se ocupa desde la url
    //Entre los corchetes se utilizo el nombre de los input para hacer el recibimiento de datos
    $nombreU=$_POST['nombreU'];
    $apellidoU=$_POST['apellidoU'];
    $emailU=$_POST['emailU'];
    $passU= $_POST['passU'];
    
    $sql = "INSERT INTO t_usuario (usuario, password, nombre, apellido) 
                                values ('$emailU','$passU','$nombreU','$apellidoU')";
    echo mysqli_query($conexion, $sql);
?>
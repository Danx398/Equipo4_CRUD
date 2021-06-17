<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/sweetalert/sweetalert2.js"></script>
<!--===============================================================================================-->
<script src="../js/validar.js"></script>
<?php 
    $usuario = $_POST['email'];
    $contraseña = $_POST['pass'];
    session_start();
    $_SESSION['usuario']=$usuario;

    include('Conexion.php');

    $consulta = "SELECT usuario, password FROM t_usuario where usuario='$usuario' and password='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        header("location: ../view/dash.php");
    }else{
        ?>
        <?php
            
            header("location: ../index.php");
            
            
        ?>
        <?php 
        
    }
    if (!$filas) {
        echo    "<script>",
                        "alert('Hola');",
                    "</script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
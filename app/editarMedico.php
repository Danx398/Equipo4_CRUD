<?php 
    include("Conexion.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrapcss.css">
</head>

<body>
    <?php 
    if (isset($_POST['enviar'])) {
        $id=$_POST['codigo_medico'];
        $nombre=$_POST['nombre_medico'];
        $apellido=$_POST['apellido_medico'];
        $sql= "UPDATE medico set Nombre_med = '".$nombre."', Apellido_med = '".$apellido."'";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            echo " <script>
                alert('Datos Actualizados correctamente');
                location.assign('../view/UiMedicos.php');
                </script>";
        }else{
            echo " <script>
                alert('No se han Actualizado correctamente Los datos');
                location.assign('../view/UiMedicos.php');
                </script>";
        }
        mysqli_close($conexion);
    }else{
        $Cod_med=$_GET['id'];
        $sql = "SELECT * from medico where Cod_med = '".$Cod_med."'";
        $resultado = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila["Nombre_med"];
        $apellido = $fila["Apellido_med"];
        mysqli_close($conexion);
    ?>
<div class="container">
        <div class="row">
            <div class="col-ms-12">
                <h1 class="ml-5 mt-3">Editar Paciente</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-ms-4">
                <form autocomplete="off" class="shadow-lg p-3 mb-5 bg-white rounded" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombre Paciente</label>
                        <input type="text" class="form-control" name="nombre_medico" id="formGroupExampleInput"
                            placeholder="" value="<?php echo $nombre; ?>" required="">
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="codigo_medico" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $Cod_pac; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Apellido Paciente</label>
                        <input type="text" class="form-control" name="apellido_medico" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $apellido; ?>" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="submit" name="enviar" value="Confirmar">
                        <button class="form-control btn-btn-secondary"><a
                                href="../view/UiPacientes.php">Cancelar</a></button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/sweetalert/sweetalert2.js"></script>
</body>

</html>
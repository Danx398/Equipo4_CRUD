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
        $id=$_POST['codigo_paciente'];
        $nombre=$_POST['nombre_paciente'];
        $apellido=$_POST['apellido_paciente'];
        $edad=$_POST['edad_paciente'];
        $familiar=$_POST['familiar_paciente'];
        $causa=$_POST['causa_paciente'];
        $sql= "UPDATE paciente set nombre_pac = '".$nombre."', Apellido_pac = '".$apellido."', 
        Edad_pac = '".$edad."', NomFam_pac = '".$familiar."', Causa = '".$causa."' where Cod_pac = '".$id."'";
        $resultado = mysqli_query($conexion, $sql);
        if ($resultado) {
            echo " <script>
                alert('Datos Actualizados correctamente');
                location.assign('../view/UiPacientes.php');
                </script>";
        }else{
            echo " <script>
                alert('No se han Actualizado correctamente Los datos');
                location.assign('../view/UiPacientes.php');
                </script>";
        }
        mysqli_close($conexion);
    }else{
        $Cod_pac=$_GET['id'];
        $sql = "SELECT * from paciente where Cod_pac = '".$Cod_pac."'";
        $resultado = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila["nombre_pac"];
        $apellido = $fila["Apellido_pac"];
        $edad = $fila["Edad_pac"];
        $familiar = $fila["NomFam_pac"];
        $causa = $fila["Causa"];
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
                        <input type="text" class="form-control" name="nombre_paciente" id="formGroupExampleInput"
                            placeholder="" value="<?php echo $nombre; ?>" required="">
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="codigo_paciente" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $Cod_pac; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Apellido Paciente</label>
                        <input type="text" class="form-control" name="apellido_paciente" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $apellido; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Edad</label>
                        <input type="text" class="form-control" name="edad_paciente" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $edad; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre del Familiar</label>
                        <input type="text" class="form-control" name="familiar_paciente" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $familiar; ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Causa</label>
                        <input type="text" class="form-control" name="causa_paciente" id="formGroupExampleInput2"
                            placeholder="" value="<?php echo $causa; ?>" required="">
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
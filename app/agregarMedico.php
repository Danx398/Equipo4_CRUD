<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrapcss.css">
    <title>Agregar</title>
</head>

<body>
    <?php 
        if (isset($_POST['enviar'])) {
            $nombre= $_POST['nombre_medico'];
            $apellido= $_POST['apellido_medico'];
            include ("Conexion.php");
            $sql= "INSERT INTO medico (Nombre_med, Apellido_med)
            values ('$nombre','$apellido')";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                echo " <script>
                alert('Agregado correctamente');
                location.assign('../view/UiMedicos.php');
                </script>";
            }else{
                echo " <script>
                alert('No se agrego');
                location.assign('../view/UiMedicos.php');
                </script>";
            }
            mysqli_close($conexion);
        }else{
     ?>
     
    <div class="container">
        <div class="row">
            <div class="col-ms-12">
                <h1 class="ml-5 mt-3">Agregar Nuevo Paciente</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-ms-4">
                <form autocomplete="off" class="shadow-lg p-3 mb-5 bg-white rounded" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombre Médico</label>
                        <input type="text" class="form-control" name="nombre_medico" id="formGroupExampleInput"
                            placeholder="Médico" required="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Apellido Médico</label>
                        <input type="text" class="form-control" name="apellido_medico" id="formGroupExampleInput2"
                            placeholder="Apellido Médico" required="">
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
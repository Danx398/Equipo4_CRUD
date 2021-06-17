<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Una cuenta</title>
    <link rel="icon" type="image/png" href="../images/icons/database_data_20916.ico" />
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/util.css">
    <link rel="stylesheet" href="../css/main.css">
    
</head>

<body>
    <!-- <h1>Aqui estara la modal de crear cuenta</h1> -->
    <div class="container text-center mt-5"><h1>Registrarse</h1></div>
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-4 ">
                <form class="shadow-lg p-3 mb-5 bg-white rounded" id="frmajax" method="POST">
                    
                <div class="form-group" >
                      <label for="">Nombre</label>
                      <input type="text" name="nombreU" id="nombre_usuario" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Apellido</label>
                      <input type="text" name="apellidoU" id="apellido_usuario" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                <div class="form-group">
                      <label for="">Correo Electronico</label>
                      <input type="text" name="emailU" id="email_usuario" class="form-control" placeholder="User@abc.com" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="password" name="passU" id="pass_usuario" class="form-control" placeholder="" aria-describedby="helpId" >
                    </div>
                    <div class="text-center">
                        <span class="btn btn-success" id="btnRegistro">Registrar</span>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/sweetalert/sweetalert2.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ajax.js"></script>
</body>

</html>
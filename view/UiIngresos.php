<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="icon" type="image/png" href="../images/icons/database_data_20916.ico" />
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/util.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/est_02.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/DataTables/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendor/DataTables/css/jq.dataT.min.css">
</head>

<body>
    <header class="header">

        <nav>
            <!-- Para hacer unas listas de navegacion a se utiliza a[href="#"]{Texto Ejemplo}*cantidad -->
            <a href="dash.php"><i class="fas fa-clinic-medical"></i> Inicio</a>
            <a href="UiPacientes.php"><i class="fas fa-procedures"></i> Pacientes</a>
            <a href="UiMedicos.php"><i class="fas fa-user-md"></i> Médicos</a>
            <a href="UiIngresos.php"><i class="fas fa-ambulance"></i> Cambios</a>
            <a id="exit" href="../index.php"><i class="fas fa-times-circle"></i> Salir</a>
            <!-- <a href="#">Contacto</a> -->
        </nav>
        <!-- Para poner un div con una clase se pone .Nombre de la clase -->
        <!-- Para poner una section con una clase se usa section.NombreClass -->
        <section class="textos-header">
            <!-- <h1>El hospital</h1>
            <h2>"Si tienes alguna emergencia, no dudes en llamarnos"</h2> -->
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>

    </header>
    <main>
        <?php 
            include "../app/Conexion.php";
            $sql= "SELECT * FROM administracion";
            $resultado= mysqli_query($conexion, $sql);
         ?>
        <div class="container">
            <div class="row">
                <div class="col-ms-12">
                    <h1 class="text-center">Cambios Realizados en el sistema</h1>
                    <!-- <a class="btn btn-dark items-align" href="../app/agregarPaciente.php">Nuevo Paciente</a> -->
                </div>
            </div>
            <hr>
            <hr>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <table id="example" class="table table-striped table-bordered"
                        style="width:100%; background-color: hsla(187, 81%, 71%, 0.2);">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>accion</th>
                                <th>Tabla Modificada</th>
                                <th>Dato Anterior</th>
                                <th>Dato Nuevo</th>
                                <th>Modificado Por:</th>
                                <th>Fecha de Modificación</th>
                                <th>Hora de Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($filas=mysqli_fetch_assoc($resultado)){
                             ?>
                            <tr>
                                <td><?php echo $filas['id'] ?></td>
                                <td><?php echo $filas['accion'] ?></td>
                                <td><?php echo $filas['tabla_modificada'] ?></td>
                                <td><?php echo $filas['dato_anterior'] ?></td>
                                <td><?php echo $filas['dato_nuevo'] ?></td>
                                <td><?php echo $filas['modificado_por'] ?></td>
                                <td><?php echo $filas['fecha_modificado']; ?></td>
                                <td><?php echo $filas['hora_modificada']; ?></td>

                            </tr>
                            <?php 
                                }
                             ?>
                        </tbody>
                    </table>
                    <?php 
                        mysqli_close($conexion);
                     ?>
                </div>
            </div>
        </div>

    </main>


    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>+33 1245576125</p>
                <p>+23 7812791283</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>hospital_gral@gmail.com</p>
                <p>hospital_nvo@hotmail.com</p>

            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>Av. Rio Amazonas #3232</p>
                <p>Cda. Pachuca #9899</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Equipo 4 Desing | Equipo 4</h2>
    </footer>


    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/sweetalert/sweetalert2.js"></script>
    <script src="../vendor/DataTables/js/jq.dataT.min.js"></script>
    <script src="../vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/Table.js"></script>
    <script type="text/javascript">
        Swal.fire(
            'Estas en el apartado de Cambios del sistema',
            '',
            'success'
        )
    </script>

</body>

</html>
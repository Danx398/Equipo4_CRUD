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
    <link rel="stylesheet" href="../css/est_01.css">
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
            <a href="UiIngresos.php"><i class="fas fa-ambulance"></i> Ingresos</a>
            <a href="../index.php"><i class="fas fa-times-circle"></i> Salir</a>
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
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-dark lead">Agregar Paciente</button>
                    
                    <table id="example" class="table table-striped table-bordered mt-4" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Familiar</th>
                                <th>Causa</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>-->
        <div class="container">
            <div class="row">
                <h2>CRUD pacientes</h2>
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Crud PDO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="btn btn-dark" data-toggle="modal" data-target="#insertar">
                                        <i class="fas fa-plus-circle"></i> Nuevo registro
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div id="tablaDatos"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <?php require_once "../modalInsert.php" ?>
    <?php require_once "../modalUpdate.php" ?>
    <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/sweetalert/sweetalert2.js"></script>
    <script src="../vendor/DataTables/js/jq.dataT.min.js"></script>
    <script src="../vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/Table.js"></script>
    <script type="text/javascript">
        Swal.fire(
            'Estas en el Apartado de Pacientes',
            '',
            'success'
        )
    </script>
</body>

</html>
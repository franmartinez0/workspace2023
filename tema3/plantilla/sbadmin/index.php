<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="proyectos.php">Proyecto con plantilla</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">



                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Área personal<i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                    <?php


                    if (isset($_SESSION['usuario'])) {
                        echo '<li><a class="dropdown-item" href="controlador.php?accion=cerrar">Logout</a></li>';
                    } else {
                        echo '<li><a class="dropdown-item" href="registro.php">Registrarse</a></li>';
                        echo '<li><a class="dropdown-item" href="login.php">Log in</a></li>';
                        echo "</div>";
                    }
                    ?>





                    
                    
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                   
                </ul>
            </li>




        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Proyectos</div>
                        <a class="nav-link" href="proyectos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Ver todos los proyectos
                        </a>
                        <div class="sb-sidenav-menu-heading">Acciones</div>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Acciones
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="controlador.php?accion=borrarTodo">Borrar todos los proyectos</a>
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo Proyecto</button></a>
                            </nav>
                        </div>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <?php


                    if (isset($_SESSION['usuario'])) {
                        echo "<class='text-primary me-2'>" . $_SESSION['usuario']['email'] . "</a>";
                    } else {
                        echo "<div class='small'>Logged in as:</div>";
                        echo "sin loguear aun ";
                        echo "</div>";
                    }
                    ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Proyectos</h1>





                    

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            
                        </div>
                            <!------------------------------- Modal ----------------------------------------------->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    


                                <form action="controlador.php" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del proyecto</label>
                                        <input type="text" class="form-control" id="exampleInputNombre" name="nombre" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">Asegúrate de no dejar en blanco ninguna casilla.</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Fecha de inicio</label>
                                        <input type="date" class="form-control" id="exampleInputNombre" name="fechaini" aria-describedby="emailHelp">
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Fecha de fin </label>
                                        <input type="date" class="form-control" id="exampleInputNombre" name="fechafin" aria-describedby="emailHelp">
                                        
                                    </div>
                                    
                                    <label for="customRange2" class="form-label">Porcentaje de avance</label>
                                        <input type="range" class="form-range" min="0" max="100" id="customRange2" name="porcentaje">
                                        <div  class="form-text">Los valores van desde 0 a 100</div>

                                    <label for="customRange2" class="form-label">Nivel de importancia</label>
                                        <input type="range" class="form-range" min="0" max="5" id="customRange2" name="importancia">
                                        <div class="form-text">Los valores van desde 0 a 5</div>
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="nuevoProyecto">Guardar nuevo proyecto</button>
                                    
                                        </div>
                                
                                </form>







                            </div>
                            
                            </div>
                        </div>
                        </div>




                        
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                        <script src="js/scripts.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                        <script src="assets/demo/chart-area-demo.js"></script>
                        <script src="assets/demo/chart-bar-demo.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
                        <script src="js/datatables-simple-demo.js"></script>








  
</body>

</html>
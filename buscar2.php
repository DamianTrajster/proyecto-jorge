<?php
require 'classes/Conexion.php';

require 'classes/Empleados.php';


//capturamos lo que viene por get
$keywords = isset($_GET['search']) ? $_GET['search'] : '';

//instanciamos el objeto 
$miObjetoEmpleados = new Empleados();
$empleados = $miObjetoEmpleados->buscarEmpleados($keywords);





?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN FONTAWESOME (SERVIDOR) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- barra animada -->
    <div>
        <p class="placeholder-wave">
            <span class="placeholder col-12" style="color: #8EACCD;"></span>
        </p>
    </div>
    
        <h1 class="text-decoration-underline fst-italic text-center mb-5 mt-3">Empleados</h1>
    
    <!-- Migaja de pan o breadcrumb -->
    <div class=" d-flex justify-content-center p-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fst-italic"><a class="link-dark fs-6" href="vista2.php">Registro de Empleados</a></li>
                <li class="breadcrumb-item fst-italic"><a class="link-dark fs-6" href="vista.php">Registro de Alumnos</a></li>
            </ol>
        </nav>
    </div>
    <main>
        <div class="d-flex flex-column  justify-content-center align-items-center">
            <?php if (count($empleados) > 0) {  ?>
                <?php foreach ($empleados as $empleado) {  ?>

                    <div class="card border-dark border-1 mt-3 shadow-lg" style="max-width: 640px;">
                        <div class="row g-0">

                            <div class="col-md-4">
                                <img height="250px" src="img/<?= $empleado->getImagen(); ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <p class="card-text"><strong class="text-decoration-underline fst-italic">Nombre</strong> : <?= $empleado->getNombre(); ?></p>
                                    <p class="card-text"><strong class="text-decoration-underline fst-italic">Apellido</strong> : <?= $empleado->getApellido(); ?></p>
                                    <p class="card-text"><strong class="text-decoration-underline fst-italic">Cargo</strong> : <?= $empleado->getCargo(); ?></p>
                                    <p class="card-text"><strong class="text-decoration-underline fst-italic">Fecha de Nacimiento</strong> : <?= $empleado->getFecha_nacimiento(); ?></p>
                                    <p class="card-text"><strong class="text-decoration-underline fst-italic">Barrio</strong> : <?= $empleado->getBarrio(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
        </div>
        </div>

    <?php } else { ?>
        <div class="text-center">
            <img class="rounded-pill" src="img/2.webp" width="500px" alt="200px">
            <h2 class="fst-italic mt-3" style="color: #8EACCD;">No hay Resultados de la busqueda</h2>
        </div>
    <?php }  ?>
    </main>
    <!--Home-->
    <div class=" d-flex flex-column justify-content-center align-items-center mt-3">
        <a href="index.php"><img class="" height="150px" width="150px" src="img/logoamdelco.png"></a>
    </div>
    <!-- Pagina anterior y Inicio de Pagina-->
    <div class="d-flex justify-content-between"><!-- sticky-bottom /botones fijos -->
        <a class="btn btn-outline-light" onClick="history.go(-1)"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #212121;"></i></a>
        <a class="btn btn-outline-light" href="#"><i class="fa-solid fa-circle-arrow-up fa-2xl" style="color: #111212;"></i></a>
    </div>
    <!-- barra animada -->
    <div>
        <p class="placeholder-wave">
            <span class="placeholder col-12" style="color: #8EACCD;"></span>
        </p>
    </div>
    <!-- Marquee -->
    <div>
        <marquee behaviour="scroll" scrolldelay="" class="text-dark mt-5 fst-italic" style="background-color:#8EACCD" loop=""><strong>Todos los derechos reservados - C.F.P 20 - 2023 - Colegiales - Argentina</strong></marquee>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
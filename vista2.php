<?php

require_once "classes/Conexion.php";

require_once "classes/Empleados.php";

//Obtener la fecha actual

$fecha_actual = date("Y-m-d");


$miObjetoEmpleados = new Empleados();
$empleados = $miObjetoEmpleados->lista_completa();
$cumpleanios = $miObjetoEmpleados->verificarCumpleanios($fecha_actual);




?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- barra animada -->
    <div>
        <p class="placeholder-wave">
            <span class="placeholder col-12" style="color: #8EACCD;"></span>
        </p>
    </div>


    <h1 class="mt-3 ms-3 text-decoration-underline fst-italic text-center">Registro de Empleados</h1>
    <!-- Migaja de pan o breadcrumb -->
    <div class=" d-flex justify-content-center p-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fst-italic"><a class="link-dark fs-6" href="vista.php">Registro de Alumnos</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <form class="col-3" action="buscar2.php" method="GET">
            <div class="form-group">
                <label for=""><strong class="fst-italic">Buscar Empleados</strong></label>
                <input type="text" class="form-control border-dark " name="search">

            </div>
            <button class="btn btn-outline-dark mt-1" type="submit">Buscar</button>
        </form>
        <div class="row mt-3">
            <?php foreach ($empleados as $empleado) { ?>
                <div class="col-4">
                    <div class="card border-dark border-1 mt-3 shadow-lg" style="width: 18rem;">
                        <img height="250px" src="img/<?= $empleado->getImagen(); ?>" class="card-img-top" alt="...">
                        <div class="card-body ms-3">

                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Nombre</strong> : <?= $empleado->getNombre(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Apellido</strong> : <?= $empleado->getApellido(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Cargo</strong> : <?= $empleado->getCargo(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Fecha de Nacimiento</strong> : <?= $empleado->getFecha_nacimiento(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Barrio</strong> : <?= $empleado->getBarrio(); ?></p>


                        </div>
                    </div>


                </div>

            <?php } ?>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1 class="mt-5 ms-3 text-decoration-underline fst-italic text-center">Listado de Empleados</h1>
    </header>
    <div class="container">

        <div class="row mt-3">

            <table class="table table-primary table-striped">
                <tr>
                    <th>ID </th>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>Cargo </th>
                    <th>Fecha de nacimiento </th>
                    <th>Barrio </th>
                </tr>
                <?php foreach ($empleados as $empleado) {  ?>
                    <tr>
                        <td><?= $empleado->getId(); ?></td>
                        <td><?= $empleado->getNombre(); ?></td>
                        <td><?= $empleado->getApellido(); ?></td>
                        <td><?= $empleado->getCargo(); ?></td>
                        <td><?= $empleado->getFecha_nacimiento(); ?></td>
                        <td><?= $empleado->getBarrio(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN FONTAWESOME (SERVIDOR) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mt-2">

    <!-- Cumpleaños -->
<main>
    <div class="text-center">
        
            <h2>Fecha actual: <?= date("d-m-y"); ?> </h2>
        
        <?php if (!empty($cumpleanios)) { ?>


            <h2 class="mt-2 fst-italic">¡¡¡Feliz cumpleaños a los siguientes Alumnos!!!</h2>

            <ul type="none">
                <?php foreach ($cumpleanios as $alumno) { ?>
                    <li class="fs-3 fst-italic"><?= $alumno->getNombre() . "" . $alumno->getApellido() ?></li>
    </div>
    <div>
        <img class="rounded-pill btn-outline-light mx-auto d-block" height="400px" width="700px" src="img/cumpleaños2.jpg">
    </div>

<?php } ?>
<?php } else { ?>
    <h2 class="mt-2 fst-italic">No hay cumpleaños hoy</h2>
    <div>
        <img class=" rounded-pill btn-outline-light mx-auto d-block" height="400px" width="700px" src="img/nocumple4.jpg">
    </div>
<?php } ?>
</ul>
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
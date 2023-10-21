<?php

require_once "classes/Conexion.php";

require_once "classes/Alumnos.php";

//Obtener la fecha actual

$fecha_actual = date("Y-m-d");

$miObjetoAlumnos = new Alumnos();
$alumnos = $miObjetoAlumnos->lista_completa();
$cumpleanios = $miObjetoAlumnos->verificarCumpleanios($fecha_actual);


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
            <span class="placeholder col-12" style="color: #FFA1F5;"></span>
        </p>
    </div>
    
        <h1 class="mt-3 ms-3 text-decoration-underline fst-italic text-center">Registro de Alumnos</h1>
    
    <!-- Migaja de pan o breadcrumb -->
    <div class=" d-flex justify-content-center p-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fst-italic"><a class="link-dark fs-6" href="vista2.php">Registro de Empleados</a></li>
            </ol>
        </nav>
    </div>
    <main>
    <div class="container">
        <form class="col-3" action="buscar.php" method="GET">
            <div class="form-group">
                <label for=""><strong class="fst-italic">Buscar Alumnos</strong></label>
                <input type="text" class="form-control border-dark " name="search">

            </div>
            <button class="btn btn-outline-dark mt-1" type="submit">Buscar</button>
        </form>
        <div class="row mt-3">
            <?php foreach ($alumnos as $alumno) { ?>
                <div class="col-4">
                    <div class="card border-dark border-1 mt-3 shadow-lg" style="width: 18rem;">
                        <img height="250px" src="img/<?= $alumno->getImagen(); ?>" class="card-img-top" alt="...">
                        <div class="card-body ms-3">

                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Nombre</strong> : <?= $alumno->getNombre(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Apellido</strong> : <?= $alumno->getApellido(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Barrio</strong> : <?= $alumno->getBarrio(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Fecha de Nacimiento</strong> : <?= $alumno->getFecha_nacimiento(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Estado Civil</strong> : <?= $alumno->getEstado_civil(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Nota</strong> : <?= $alumno->getNota(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Curso Inscripto</strong> : <?= $alumno->getCurso_inscripto(); ?></p>
                            <p class="card-text"><strong class="text-decoration-underline fst-italic">Correo</strong> : <?= $alumno->getCorreo(); ?></p>



                        </div>
                    </div>

                </div>

            <?php } ?>

        </div>



    </div>

    </main>
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
        <h1 class="mt-5 ms-3 text-decoration-underline fst-italic text-center">Listado de Alumnos</h1>
    </header>
    <div class="container">

        <div class="row mt-3">

            <table class="table table-danger table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Barrio</th>
                    <th>Fecha de nacimiento</th>
                    <th>Estado Civil</th>
                    <th>Nota</th>
                    <th>Curso Inscripto</th>
                    <th>Correo</th>
                </tr>
                <?php foreach ($alumnos as $alumno) {  ?>
                    <tr>
                        <td><?= $alumno->getId(); ?></td>
                        <td><?= $alumno->getNombre(); ?></td>
                        <td><?= $alumno->getApellido(); ?></td>
                        <td><?= $alumno->getBarrio(); ?></td>
                        <td><?= $alumno->getFecha_nacimiento(); ?></td>
                        <td><?= $alumno->getEstado_civil(); ?></td>
                        <td><?= $alumno->getNota(); ?></td>
                        <td><?= $alumno->getCurso_inscripto(); ?></td>
                        <td><?= $alumno->getCorreo(); ?></td>
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
    <div class="text-center">
        <h2>Fecha actual: <?= date("d-m-y"); ?> </h2>

        <?php if (!empty($cumpleanios)) { ?>


            <h2 class="mt-2 fst-italic">¡¡¡Feliz cumpleaños a los siguientes Alumnos!!!</h2>

            <ul type="none">
                <?php foreach ($cumpleanios as $alumno) { ?>
                    <li class="fs-3 fst-italic"><?= $alumno->getNombre() . "" . $alumno->getApellido() ?></li>
    </div>
    <div>
        <img class="rounded-pill btn-outline-light mx-auto d-block" height="400px" width="700px" src="img/feliz-cumpleaños-minions.gif">
    </div>

<?php } ?>
<?php } else { ?>
    <h2 class="mt-2 fst-italic">No hay cumpleaños hoy</h2>
    <div>
        <img class="rounded-pill btn-outline-light mx-auto d-block" height="400px" width="700px" src="img/nocumple3.jpg">
    </div>
<?php } ?>
</ul>

<!-- Home-->
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
        <span class="placeholder col-12" style="color: #FFA1F5;"></span>
    </p>
</div>
<!-- Marquee -->
<div>
    <marquee behaviour="scroll" scrolldelay="" class="text-dark mt-5 fst-italic" style="background-color:#FFA1F5" loop=""><strong>Todos los derechos reservados - C.F.P 20 - 2023 - Colegiales - Argentina</strong></marquee>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
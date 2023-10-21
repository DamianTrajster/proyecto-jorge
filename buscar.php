<?php
require 'classes/Conexion.php';
require 'classes/Alumnos.php';



//capturamos lo que viene por get
$keywords = isset($_GET['search']) ? $_GET['search'] : '';

//instanciamos el objeto 
$miObjetoAlumnos = new Alumnos();
$alumnos = $miObjetoAlumnos->buscarAlumnos($keywords);



?>





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

<body>
  <!-- barra animada -->
  <div>
    <p class="placeholder-wave">
      <span class="placeholder col-12" style="color: #FFA1F5;"></span>
    </p>
  </div>
  
    <h1 class="text-decoration-underline text-center mb-5 mt-3">Alumnos</h1>
  
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
      <?php if (count($alumnos) > 0) {  ?>
        <?php foreach ($alumnos as $alumno) {  ?>

          <div class="card mt-3 border-dark border-1 shadow-lg mb-3" style="width: 640px;">
            <div class="row g-0">

              <div class="col-md-4">
                <img height="250px" src="img/<?= $alumno->getImagen(); ?>" class="card-img-top" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
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

          </div>

        <?php }  ?>
    </div>

  <?php } else { ?>
    <div class="text-center">
      <img class="rounded-pill" src="img/3.jpg" width="500px" alt="200px">
      <h2 class="fst-italic mt-3" style="color: #DA0C81;">No hay Resultados de la busqueda</h2>
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
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Instituto E.N.S.E.C.</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p><i class="fa fa-envelope"></i> <em> ensec@ensec.edu.bo</em> <i class="fa fa-phone"></i> 3332859 </p>            
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          E.N.S.E.C.
                      </a>
                      
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="../index.php" class="<?php if ($first_part=="index.php") {echo "active"; } else  {echo "noactive";}?>">Home</a></li>
                          <li><a href="https://www.ensec.edu.bo/institucion.html">INSTITUCIÓN</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Carreras</a>
                              <ul class="sub-menu">
                                  <li><a href="https://www.ensec.edu.bo/sistemas.html">Sistemas Informáticos</a></li>
                                  <li><a href="https://www.ensec.edu.bo/secretariado.html">Secretariado Ejecutivo</a></li>
                                  <li><a href="https://www.ensec.edu.bo/administracion.html">Administración de Empresas</a></li>
                                  <li><a href="https://www.ensec.edu.bo/contaduria.html">Contaduría General</a></li>
                                  <li><a href="https://www.ensec.edu.bo/comercio.html">Comercio Inter. y Admin. Aduanera</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a href="javascript:void(1)">Personal</a>
                              <ul class="sub-menu">
                                  <li><a href="https://www.ensec.edu.bo/administrativos.html">Administrativos</a></li>
                                  <li><a href="https://www.ensec.edu.bo/docentes.html">Docentes</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a href="javascript:void(1)">Plataforma</a>
                              <ul class="sub-menu">
                                  <li><a href="https://www.ensec.edu.bo/administrativos.html">Plataforma</a></li>
                                  <li><a href="https://www.ensec.edu.bo/docentes.html">Biblioteca Virtual</a></li>
                              </ul>
                          </li>
                          <li><a href="<?php echo $rutaLogin ?>" class="<?php if ($first_part=="login.php") {echo "active"; } else  {echo "noactive";}?>">Login</a></li> 
                          <li class="has-sub">
                              <a href="javascript:void(1)" class="<?php if ($first_part=="registro.php") {echo "active"; } else  {echo "noactive";}?>">Registro</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo $rutaRegistroEstudiante ?>" >Estudiante</a></li>
                                  <li><a href="<?php echo $rutaRegistroEmpresa ?>" >Empresa</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
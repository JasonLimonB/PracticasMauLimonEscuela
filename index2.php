<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Programacion 509</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="GRUPO 509">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="css/boton.css">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/programacionestructurada.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Programacion Estructurada</h4>
				  <p>
				  Es un paradigma de programación orientado a mejorar la claridad, calidad y tiempo de desarrollo de un programa de computadora recurriendo únicamente a subrutinas y tres estructuras básicas
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/basessimples.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Bases de datos simples</h4>
				  <p>
				  Las bases de datos simples son aquellas que están formadas por una sola tabla de datos. Este tipo de bases de datos son muy fáciles de crear y utilizar y cubren la mayoría de necesidades de los particulares.
				  </p>
			</div>
		  </div>


----

<div class="item">
			<img src="images/appsweb.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Aplicaciones Web</h4>
				  <p>
				  Se denomina aplicación web a aquellas herramientas que los usuarios pueden utilizar accediendo a un servidor web a través de internet o de una intranet mediante un navegador.
				  </p>
			</div>
		  </div>


-------

<div class="item">
			<img src="images/appsmoviles.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Aplicaciones Moviles</h4>
				  <p>
				  Se denomina aplicación web a aquellas herramientas que los usuarios pueden utilizar accediendo a un servidor web a través de internet o de una intranet mediante un navegador.
				  </p>
			</div>
		  </div>
----

<div class="item">
			<img src="images/sistemasop.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Administra Sistemas Operativos</h4>
				  <p>
				  La administración de un sistema incluye un amplia gama de tareas tales como las de instalar una impresora o un escáner, configurar y compartir el acceso a Internet, instalar programas, configurar un cortafuegos, añadir nuevos usuarios, etc., en definitiva crear un entorno de trabajo seguro, cómodo y productivo.
				  </p>
			</div>
		  </div>
--------
<div class="item">
			<img src="images/instalayconfigura.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Instala y configura aplicaciones y servicios</h4>
				  <p>
				  Incorporar en una computadora una aplicación o un dispositivo para poder ser utilizado. Las aplicaciones más elaboradas suelen tener un programa instalador que facilita el proceso.

				  </p>
			</div>
		  </div>

-----------------
		  <div class="item">
			<img src="images/poo.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Programacion orientada a objetos </h4>
				  <p>
				  Es un paradigma de programación que usa objetos en sus interacciones, para diseñar aplicaciones y programas informáticos. Está basada en varias técnicas, incluyendo herencia, cohesión, abstracción, polimorfismo, acoplamiento y encapsulamiento
				  </p>
			</div>

		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros cursos</h3>

<a class="btn btn-success mibtn" href="reporte.php" target="_blank"> Generar reporte de los cursos </a>

<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Programacion Estructurada</h4>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Bases de datos simples</h4>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
<div class="span2">
				<div class="well well-small">
					<h4>Aplicaciones Web</h4>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Aplicaciones Moviles</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Administra S.O</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Instala y Configura </h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>



	</style>
  </body>
</html>
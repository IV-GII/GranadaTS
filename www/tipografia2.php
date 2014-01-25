<!DOCTYPE html>

<html>
  <head>
    <title>GranadaTS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<body style="background:#7BC9D0">
  </head>
  
  
  <body>
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.xn--granadatierrasoada-10b.es/">GranadaTS</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Inicio</a></li>
					<li class="active"><a href="tipografia.html">Tipografía</a></li>
					<li><a href="imagenes.html">Imágenes</a></li>
					<li><a href="musica.html">Música</a></li>
					
				</ul>
 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://www.xn--granadatierrasoada-10b.es/"> Home </a></li>
				</ul>
					
				</div>
			</nav>
		
		
		<h1> Granada <small> Tierra Soñada </small> </h1>
		
		<?php
		   $texto = $_POST['texto'];
		   
		   echo '
		   <div class="panel panel-default">
				<br><br><br>
				<div class="panel-body">
					'.$texto.'
				</div>
				<br><br><br>
			</div>';
	
		
		?>
		
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
    
    </div>
  </body>
</html>
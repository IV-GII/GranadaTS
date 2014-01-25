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
function RemoveExtension($strName) {
  $ext = strrchr($strName, '.');

  if($ext !== false) {
    $strName = substr($strName, 0, -strlen($ext));
  }
  return $strName;
} 
  
  $dirImagenes = "imagenesGR/";
  
  $nombreFich = preg_replace("/[^a-zA-Z0-9.]/", "", $_FILES['imagen']['name']);
  
  $nombreTemporal = $_FILES['imagen']['tmp_name'];
  
  move_uploaded_file($nombreTemporal, $dirImagenes . $nombreFich);

  chmod($dirImagenes . $nombreFich, 0755);

  $aux = getimagesize($dirImagenes . $nombreFich);


  $texto = $_POST['texto'];

  $fondo = $_POST['color'];     
  
  $width = $aux[0];
  $height = $aux[1];
  
 
  
  // Creamos el SVG
  
  flush();
  
  $nombreSVG = $dirImagenes . "GranadaTS_" . RemoveExtension($nombreFich) . ".svg";
  $nombreSVG2 = "GranadaTS_" . RemoveExtension($nombreFich) . ".svg";
  
  // Leemos en una variable la plantilla de texto

  $content = file_get_contents("ejemplo2.svg.plantilla");
  // Reemplazamos [[COLOR_FONDO]]
  $content = str_replace("[[COLOR_FONDO]]", $fondo, $content);
  
  // Reemplazamos [[TEXTO1]]
  $content = str_replace("[[TEXTO1]]", $texto, $content);
  
  $fh = fopen($nombreSVG, 'w');
  
		fwrite($fh, $content);
  
  fclose($fh);
  
  chmod($nombreSVG, 0755);
  
  flush();

  // Creamos la imagen png
  
  flush();
  
//  $nombrePNG = $dirImagenes . "azotea_" . RemoveExtension($nombreFich) . ".png";
  $nombrePNG = "granadaTS_" . RemoveExtension($nombreFich) . ".png";
  
  chdir($dirImagenes);  
  
  $comando = "rsvg " . $nombreSVG2 . " " . $nombrePNG;
  
  $comando = escapeshellcmd($comando);
  $aux = system($comando);
 
  chdir("..");

?>

		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Tipografía
					</h3>
				</div>
				<div class="panel-body">
					<center> <img alt="140x140" src="imagenesGR/granadaTS_.png" class="img-circle" /> </center>
					<br><br>
					<p><a href="<?php echo($dirImagenes); ?>/<?php echo($nombrePNG); ?>"><?php echo("granadaTS_" . RemoveExtension($nombreFich) . ".png")?></a></p>
				</div>
					
				</div>
				<div class="panel-footer">
					
				</div>
		
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
    
    </div>
     
  </body>
</html>
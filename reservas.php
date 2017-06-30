
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Clinica Dental</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Clinica Dental</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./index.php">Home</a></li>
            <li class="active"><a href="">Reservas</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <p class="lead">
<?php

	include_once("./db/db.php");
	$db = new DB;

	if(isset($_POST['fecha']) && $_POST['fecha'] == ""){
		$error = 1;
	}

	$ffin =	null;

	if($error != 1 && $citas = $db->getCitasByFecha($_POST['fecha'])){

		echo "<h1>". date("d/m/Y",strtotime($_POST['fecha'])) ."</h1>";

		while($filas = $citas->fetch_assoc()){
			//echo $filas['fecha'] . "    -->> " . $filas['duracion'];

			$inicio	= date("H:i", strtotime($filas['fecha']));
			$fin	= date("H:i", strtotime('+'.$filas['duracion'].' minutes', strtotime($filas['fecha'])));


			if($ffin != null && $ffin < $inicio){
				echo '<div class="panel" style="color: #3c763d;background-color: #dff0d8;border-color: #d6e9c6;">
		 		 <div class="panel-body">'.$ffin . "    -   " . $inicio.'</div>
			    	 </div>';

			}
				echo '<div class="panel" style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;">
		 		 <div class="panel-body">'.$inicio . "    -   " . $fin.'</div>
			    	 </div>';
			$ffin = $fin;
			

		}

	}
	else{
		echo "No hay datos para las fechas seleccionadas, perdone las molestias. ";
	}

?>

      </p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


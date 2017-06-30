<html>
	<head>
       		<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        	<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <title>Clinica Dental</title>
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
			  <a class="navbar-brand" href="#">Clinica dental</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
			    <li class="active"><a href="#">Home</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		      </div>
		    </nav>
		    <div class="container" style="margin-top:50px;">

		      <div class="starter-template">
			<h1>Crear nueva cita</h1>
			<p class="lead">Selecciona la fecha y hora de la hora solicitada.</p>
		      </div>
		</div>
		<div class="container">	
		<form action="./reservas.php" method="POST">
		    <div class="row">
			<div class='col-sm-6'>
			    <div class="form-group">
				<div class='input-group date' id='datetimepicker1'>
				    <input type='text' name="fecha" class="form-control" />
				    <span class="input-group-addon">
				        <span class="glyphicon glyphicon-calendar"></span>
				    </span>
				</div>
			    </div>
			<script type="text/javascript">
				$(function () {
					$('#datetimepicker1').datetimepicker({
						format:'YYYY-MM-DD',
					});

			   	 });
			</script>
		    </div>
			</div>
			<div class="row">
				<div class='col-sm-6'>
				    <div class="form-group">
					<div class='input-group date'>
					    <input type='submit' value="Enviar" class="form-control" />
					</div>
				    </div>
				</div>
			
		</form>
		</div>
	</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<style type="text/css">

.container {

	margin-top: 10%;


}
body {
	background-image: url("img/fondo 2.jpg");
}

  
</style>

</head>
<body>
	<center><h1><span class="badge badge-secondary ">Mueblería Rosales </span></h1></center>

 <!-- Contiene el login --> 
 	<div class="container">
		<div class="row">
		<div class="col-md-6 col-lg-4 ">	
		
		<form action="validar.php" method="POST" >
		
	<!--Aqui empieza campos de formulario-->	

	    <div class="form-group">			
        	<input type="text" name="usuario" class="form-control"  placeholder="Nombre de Usuario">
        </div>
        
        <div class="form-group">
        	<input type="password" class="form-control" name="clave" placeholder="Contraseña">
        </div>
        
        <input type="submit" value="Continuar" class="btn btn-success"></input>
        </form>

			</div>
		   </div>
	    </div>

	<!--Aqui termina campos de formulario-->

	


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>form_cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<style type="text/css"> 

body {
	margin-top: 1%;
	background-image: url("../img/fondo.jpg");
	 background-size: cover;
	 background-repeat: no-repeat;
}
h1 {
 font-family: 'Righteous-Regular' cursive;
}

</style>

</head>


<body>

<form action="registrar_cliente.php" method="POST" accept-charset="utf-8">

<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label "><strong>FECHA</strong></label>
  <div class="col-10">
    <input class="form-control" name="fecha" type="date" value="" id="example-date-input">
  </div>
</div>
<center><h1>D' ROSALES</h1></center>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInput">NOMBRE</label>
  <input type="text" name="nombre" class="form-control mb-2 mr-sm-2 mb-sm-0 font-weight-bold" id="inlineFormInput" placeholder="Nombre">
<br>
  <form class="form-inline">
  <label class="sr-only" for="inlineFormInput">DIRECCION</label>
  <input type="text" name="direccion" class="form-control mb-2 mr-sm-2 mb-sm-0 font-weight-bold" id="inlineFormInput" placeholder="Dirección">
<br>
  <form class="form-inline">
  <label class="sr-only"  for="inlineFormInput">CIUDAD</label>
  <input type="text" name="ciudad" class="form-control mb-2 mr-sm-2 mb-sm-0 font-weight-bold" id="inlineFormInput" placeholder="Ciudad">
<br>

  <form class="form-inline">
  <label class="sr-only" for="inlineFormInput">DIA DE PAGO</label>
  <input type="text" name="dia_pago" class="form-control mb-2 mr-sm-2 mb-sm-0 font-weight-bold" id="inlineFormInput" placeholder="Dia de pago">
<br>
  <form class="form-inline">
  <label class="sr-only" for="inlineFormInput ">COBRADOR</label>
  <input type="text" name="cobrador" class="form-control mb-2 mr-sm-2 mb-sm-0 font-weight-bold " id="inlineFormInput" placeholder="Nombre del cobrador">
<br>

<center><button type="submit" class="btn btn-outline-dark font-weight-bold">Confirmar!</button></center>

</form>
<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
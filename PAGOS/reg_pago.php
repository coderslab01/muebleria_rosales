
 <!DOCTYPE html>
<html>
<head>
	<title>Registro de Pago</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<style type="text/css">
	body {
		margin-top: 5%;
	 background-image: url("../img/fondo 1.jpg");
	 background-size: cover;
	 background-repeat: no-repeat;
	}
	@media (min-width: 600px) {
  body {
  	background-image: url("../img/fondo.jpg");
	 background-size: cover;
	 background-repeat: no-repeat;
  }
}
</style>
<script type="text/javascript" src="abono.js"></script>

</head>
<body>



<form action="act_pago.php" method="post" accept-charset="utf-8">
  

  <?php 
$cod=$_GET["parametro"];
require "../controldb.php";
$obj= new controldb();
$data=$obj->consultar("SELECT * FROM venta WHERE id_venta=$cod ");
  ?>
  <?php
foreach ($data as $filas ) {
?>
  <div class="form-row">
    <div class="col-md-4 mb-3">      
      <input type="text" name="id_venta" class="form-control is-valid font-weight-bold" id="" placeholder="ID Venta" value="<?php echo $cod ?>" required >
      <div class="valid-feedback">        
      </div>
    </div>

    <div class="col-md-4 mb-3">      
      <input type="text" class="form-control is-valid font-weight-bold" id="" name="id_cliente" value="<?php echo $filas["id_cliente"]?>" required>
      <div class="valid-feedback">
      </div>
    </div>

    <div class="col-md-4 mb-3">      
      <input type="date" class="form-control is-valid font-weight-bold" id="" name="fecha"  value="<?php echo $filas["fecha"]?>" required>
      <div class="valid-feedback">
      </div>
    </div>

  <div class="col-md-4 mb-3">      
      <input type="text" class="form-control is-valid font-weight-bold" name="dia_pago"  value="<?php echo $filas["dia_pago"]?>" required>
      <div class="valid-feedback">
      </div>
    </div>




  <div class="col-md- mb-3">
    <div class="d-inline p-2 bg-light text-muted"> <?php echo $filas["nombre"]?></div>
    </div>



  <div class="col-md- mb-3">
    <div class="d-inline p-2 bg-light text-muted"><?php echo $filas["direccion"]?></div>
    </div>




  <div class="col-md- mb-3">
    <div class="d-inline p-2 bg-light text-muted"><?php echo $filas["ciudad"]?></div>
    </div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Abono</span>
  </div>
  <input type="text" name="abono" id="n1" value="<?php echo $filas["abono"]?>" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Abono">
  <div class="input-group-append">
 
  </div>
</div>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Saldo Actual</span>
  </div>
  <input type="text" id="n2" name="saldoa" value="<?php echo $filas["saldo"]?>" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="">

</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Saldo Nuevo</span>
  </div>
  <input type="text" id="res" name="saldo" class="form-control" aria-label="Amount (to the nearest dollar)" >
  
</div>
<?php 
}
  ?>
  <button type="button" onclick="resta()" class="btn btn-success">CALCULAR NUEVO SALDO</button>
<input type="submit" VALUE="REGISTRAR PAGO" class="btn btn-outline-dark font-weight-bold">

    </form>


   



<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
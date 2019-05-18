<!DOCTYPE html>
<html>
<head>
	<title>Registro de Venta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<style type="text/css">
	body {
		margin-top: 5%;
	 background-image: url("../img/fondo.jpg");
	 background-size: cover;
	 background-repeat: no-repeat;
	}
</style>
<script type="text/javascript" src="suma.js"></script>
</head>
<body>
<CENTER><h1>PANEL VENTA</h1></CENTER>
<form action="ACT_venta.php" method="POST">
  <?php 
$cod=$_GET["parametro"];
require "../controldb.php";
$obj= new controldb();
$data=$obj->consultar("SELECT * FROM venta WHERE id_cliente=$cod ");
  ?>
  <?php
foreach ($data as $filas ) {
?>
  <div class="form-row">
    <div class="col-md-4 mb-3">      
      <input type="text" name="id_cliente" class="form-control is-valid font-weight-bold"  placeholder="ID Cliente" value="<?php echo $cod ?>" required>
      <div class="valid-feedback">        
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">      
      <input type="text" name="id_venta" class="form-control is-valid font-weight-bold"  placeholder="ID Cliente" value="<?php echo $filas["id_venta"] ?>" required>
      <div class="valid-feedback">        
      </div>
    </div>

    <div class="col-md-4 mb-3">      
      <input type="text" name="nombre" class="form-control is-valid font-weight-bold" id="" placeholder="Nombre" value="<?php echo $filas["nombre"] ?>" required>

      <div class="valid-feedback">
      </div>

    </div>

    <div class="col-md-4 mb-3">      
      <input type="text" name="direccion" class="form-control is-valid font-weight-bold" id="" placeholder="Dirección" value="<?php echo $filas["direccion"] ?>" required>
      <div class="valid-feedback">
      </div>
    </div>



  <div class="form-row">
    <div class="col-md-4 mb-3">      
      <input type="text" name="ciudad" class="form-control is-valid font-weight-bold" id="" placeholder="Ciudad" value="<?php echo $filas["ciudad"] ?>" required>
      <div class="valid-feedback">        
      </div>
    </div>

    <div class="col-md-4 mb-3">      
      <input type="date" name="fecha" class="form-control is-valid font-weight-bold" id="" placeholder="Fecha" value="<?php echo $filas["fecha"] ?>" required>
      <div class="valid-feedback">
      </div>
    </div>

    <div class="col-md-4 mb-3">      
      <input type="text" name="cobrador" class="form-control is-valid font-weight-bold" id="" placeholder="Cobrador" value="<?php echo $filas["cobrador"] ?>" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">      
      <input type="text" name="dia_pago" class="form-control is-valid font-weight-bold" id="" placeholder="dia_pago" value="<?php echo $filas["dia_pago"] ?>" required>
      <div class="valid-feedback">
      </div>
    </div>
    
<!--Aquí empieza tabla--><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Cantidad</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
      	<input type="text" value="<?php echo $filas["cuno"]?>" name="cuno" id="c1" class="col-sm-3 form-control">
      </th>
      <td>
      	 <input type="text" placeholder="producto" name="puno" value="<?php echo $filas["puno"]?>" class="col-sm-12 form-control">
      </td>
      <td> <input type="text" value="<?php echo $filas["tuno"]?>" name="tuno" id="t1" class="col-sm-3 form-control"> </td>
    </tr>
    <tr>
      <th scope="row">
      	<input type="text" value="<?php echo $filas["cdos"]?>" id="c2" name="cdos" class="col-sm-3 form-control">
      </th>
      <td> <input type="text" value="<?php echo $filas["pdos"]?>" placeholder="producto" name="pdos" class="col-sm-12 form-control"> </td>
      <td> <input type="text" value="<?php echo $filas["tdos"]?>" name="tdos" id="t2" class="col-sm-3 form-control"> </td>
    </tr>
    <tr>
      <th scope="row">
      	<input type="text" value="<?php echo $filas["ctres"]?>" id="c3" name="ctres" class="col-sm-3 form-control">
      </th>
      <td> <input type="text" value="<?php echo $filas["ptres"]?>"  placeholder="producto" name="ptres" class="col-sm-12 form-control"> </td>
      <td> <input type="text" value="<?php echo $filas["ttres"]?>" id="t3" name="ttres" class="col-sm-3 form-control"> </td>      
    </tr>
     <tr>
      
      <td> <input type="text" value="<?php echo $filas["abono"] ?>" placeholder="abono" id="abono" name="abono" class="col-sm-3 form-control"> </td>
      
      <td> <input type="text" value="<?php echo $filas["saldo"]?>" placeholder="saldo" id="saldo" name="saldo" class="col-sm-3 form-control"> </td>      
    </tr>

  </tbody>
  <?php 
}
  ?>

</table> <!--Aquí termina tabla-->
<button type="button" onclick="calculo()" class="btn btn-success">CALCULAR VENTA</button><br></br>
  <input type="submit" value="ACTUALIZAR VENTA" class="btn btn-danger">
</form>
<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
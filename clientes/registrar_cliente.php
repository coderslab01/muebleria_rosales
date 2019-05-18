<?php
include'../conexion.php';

$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$dia_pago=$_POST["dia_pago"];
$cobrador=$_POST["cobrador"];
$fecha=$_POST["fecha"];

$insertar="
INSERT INTO 
cliente (nombre,direccion,ciudad,dia_pago,cobrador,fecha) 
VALUES('$nombre','$direccion','$ciudad','$dia_pago','$cobrador','$fecha')";

$res=mysqli_query($conecta,$insertar);

if(!$res){
	echo "fallo el registro";
}else{
	header("location:tablaclientes.php");
}


  ?>
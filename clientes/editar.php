<?php
include'../conexion.php';
$id_cliente=$_POST["id_cliente"];
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$dia_pago=$_POST["dia_pago"];
$cobrador=$_POST["cobrador"];
$fecha=$_POST["fecha"];


$updatec="

UPDATE cliente 

SET nombre='$nombre',direccion='$direccion',ciudad='$ciudad',dia_pago='$dia_pago',cobrador='$cobrador',fecha='$fecha'

WHERE id_cliente='$id_cliente'
 ";
$updatev="

UPDATE venta 

SET nombre='$nombre',direccion='$direccion',ciudad='$ciudad',cobrador='$cobrador',fecha='$fecha',dia_pago='$dia_pago'

WHERE id_cliente='$id_cliente'";
 

$resc=mysqli_query($conecta,$updatec);
$res=mysqli_query($conecta,$updatev);

if(!$resc){
	echo "FALLO actualizacion de cliente";
}else{
	header("location:tablaclientes.php");
}



  ?>
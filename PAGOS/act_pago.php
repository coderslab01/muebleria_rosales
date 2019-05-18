<?php
include'../conexion.php';
$id_venta=$_POST["id_venta"];
$id_cliente=$_POST["id_cliente"];
$fecha=$_POST["fecha"];	
$dia_pago=$_POST["dia_pago"];
$abono=$_POST["abono"];
$saldo=$_POST["saldo"];


$updatev="

UPDATE venta 

SET fecha='$fecha',dia_pago='$dia_pago',abono='$abono',saldo='$saldo'

WHERE id_venta='$id_venta'";
 
$insert="

INSERT INTO pago (id_venta,id_cliente,dia,fecha,abono,saldo_final)

VALUES ('$id_venta','$id_cliente','$dia_pago','$fecha','$abono','$saldo')";

$resi=mysqli_query($conecta,$insert);
$res=mysqli_query($conecta,$updatev);

if(!$res){
	echo "FALLO actualizacion de cliente";
}else{
	header("location:lista_pagos.php");
}



  ?>
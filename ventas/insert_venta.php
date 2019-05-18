<?php 

include'../conexion.php';
$id_cliente=$_POST["id_cliente"];
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$fecha=$_POST["fecha"];	
$cobrador=$_POST["cobrador"];
$dia_pago=$_POST["dia_pago"];
$c1=$_POST["cuno"];
$c2=$_POST["cdos"];
$c3=$_POST["ctres"];
$p1=$_POST["puno"];  
$p2=$_POST["pdos"]; 
$p3=$_POST["ptres"]; 
$t1=$_POST["tuno"]; 
$t2=$_POST["tdos"];
$t3=$_POST["ttres"];
$abono=$_POST["abono"];
$saldo=$_POST["saldo"];


$insert="INSERT INTO 
venta
(id_cliente,nombre,direccion,ciudad,cobrador,fecha,dia_pago,cuno,cdos,ctres,puno,pdos,ptres,tuno,tdos,ttres,abono,saldo) 
VALUES
('$id_cliente','$nombre','$direccion','$ciudad','$cobrador','$fecha','$dia_pago','$c1','$c2','$c3','$p1','$p2','$p3','$t1','$t2','$t3','$abono','$saldo')";

$res=mysqli_query($conecta,$insert);

if(!$res){
	echo "fallo el registro";
}else{
	header("location:tab_venta.php");
}

 ?>
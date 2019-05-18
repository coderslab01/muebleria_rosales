<?php
include'../conexion.php';
$id_venta=$_POST["id_venta"];
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


$updatev="

UPDATE venta 

SET nombre='$nombre',direccion='$direccion',ciudad='$ciudad',cobrador='$cobrador',fecha='$fecha',dia_pago='$dia_pago',cuno='$c1',cdos='$c2',ctres='$c3',puno='$p1',pdos='$p2',ptres='$p3',tuno='$t1',tdos='$t2',ttres='$t3',abono='$abono',saldo='$saldo'

WHERE id_venta='$id_venta'";
 


$res=mysqli_query($conecta,$updatev);

if(!$res){
	echo "FALLO actualizacion de cliente";
}else{
	header("location:tab_venta.php");
}



  ?>
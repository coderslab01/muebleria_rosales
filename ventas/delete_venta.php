<?php
include'../conexion.php';
$id_venta=$_POST['id_venta'];


$eliminarS="DELETE FROM venta WHERE id_venta=$id_venta";
$rs = mysqli_query($conecta,$eliminarS);

if(!$rs){
  echo 'error'; 

}else {
  
 header("location:tabla_eliminar_venta.php");
  # code...
}

  ?>
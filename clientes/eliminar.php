
<?php
include'../conexion.php';
$id_cliente=$_POST['id_cliente'];

$eliminar="DELETE FROM cliente WHERE id_cliente=$id_cliente";
$r = mysqli_query($conecta,$eliminar);
$eliminarS="DELETE FROM venta WHERE id_cliente=$id_cliente";
$rS = mysqli_query($conecta,$eliminarS);

if(!$r){
  echo 'error'; 

}else {
  
 header("location:tab_elim_cli.php");
  # code...
}

  ?>
  
<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];




//Conectar con base de datos

$conectar=mysqli_connect("localhost", "root","","mrosales");
$consulta="SELECT * FROM usuario WHERE usuario='$usuario' and pass='$clave'";
$resultado=mysqli_query($conectar, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:home.php");
}
else{
	echo "Error en el usuario o la contraseña";
}

//mysqli_free_result($resultado);
//mysqli_close($conectar);?>

<!--HTML-->
<br><a href="index.php"><input type="submit" value="Volver"></input></a>

<!DOCTYPE html>
<html>
<head>
	<title>Home Admon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>
<body>

<!--Aquí Empieza Barra de navegación-->
<div class="container">
 <div class="row">
 <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 < <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">Finanzas <span class="sr-only">(current)</span></a>
      </li>-->
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="clientes/tablaclientes.php">Mostrar Clientes</a>
          <a class="dropdown-item" href="clientes/tab_edit_cli.php">Editar Clientes</a>
          <a class="dropdown-item" href="clientes/registro_cliente.php">Crear Clientes</a>
          <a class="dropdown-item" href="clientes/tab_elim_cli.php">Eliminar Clientes</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Venta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ventas/tab_venta.php">Mostrar Ventas</a>
          <a class="dropdown-item" href="ventas/editar_venta.php">Editar Ventas</a>
          <a class="dropdown-item" href="ventas/asig_ventas.php">Asignar Venta</a>
          <a class="dropdown-item" href="ventas/tabla_eliminar_venta.php">Eliminar VENTA</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pagos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
       
          <a class="dropdown-item" href="PAGOS/lista_pagos.php">Asignar Pagos</a>
          
        </div>
      </li>   
     
     
      <li class="nav-item">
      <a href="salir.php"><input  type="submit" value="Cerrar sesión" class="btn btn-primary"></input></a>
      <!--<input class="btn btn-primary" type="submit" value="Cerrar sesión ">-->
      </li>
    </ul>
  </div>
  </nav>
  </div>
  </div>
<!--Aquí termina Barra de navegación-->


<!--COMIENZA CUERPO-->


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
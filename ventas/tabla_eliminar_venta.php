
<!DOCTYPE html>
<html>
<head>
  <title>eliminar venta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<script>
    function modificar(cod){
      window.location="http://localhost/prueba_roman/ventas/eliminar_venta.php?parametro="+cod;

    }
  </script>
<body>
	<center><h1>Eliminar Ventas</h1></center>
  <?php  
    $host="localhost";
    $db_name="mrosales";
    $user="root";
    $pass="";
    $conecta=mysqli_connect($host,$user,$pass);
    $con_bd=mysqli_select_db($conecta,$db_name);
    $consulta="SELECT * FROM venta ";
    $res=mysqli_query($conecta,$consulta);

  ?>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
     <th scope="col">ID VENTA</th>
     <th scope="col">ID CLIENTE</th>
      <th scope="col">FECHA</th>
      <th scope="col">NOMBRE CLIENTE</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">CIUDAD</th>
      <th scope="col">DIA PAGO</th>
      <th scope="col">COBRADOR</th>
      <th scope="col">ABONO</th>
      <th scope="col">SALDO</th>
      <th scope="col">EDITAR VENTA</th>
      <th scope="col"><a href="../home.php"><button type="button"class="btn btn-success">Home</button></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php  
        foreach ($res as $fila) {
      ?>
    </tr>
    <tr>
      <td scope="row"><?php echo $fila["id_venta"] ?></td>
      <td><?php echo $fila["id_cliente"] ?></td>
      <td><?php echo $fila["fecha"] ?></td>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["direccion"] ?></td>
      <td><?php echo $fila["ciudad"] ?></td>
      <td><?php echo $fila["dia_pago"] ?></td>
      <td><?php echo $fila["cobrador"] ?></td>
      <td><?php echo $fila["abono"] ?></td>
      <td><?php echo $fila["saldo"] ?></td>
      <td><img src="../img/cart.png" onclick="modificar(<?php echo $fila["id_cliente"] ?>)"></td>
      
    </tr>
    
  </tbody>
  <?php
      }
    ?>
</table>
  </tbody>
</table>

<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
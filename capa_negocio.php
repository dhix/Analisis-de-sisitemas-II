<?php
include_once("capa_de_bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link  rel="stylesheet"  type="text/css" href="nego.css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>capa negocio</title>
</head>
<body>
<form action="presentacion.php" method="get">
<table>
  <caption>ANALISIS DE SISTEMAS II</caption>
  <thead>
    <tr>
     <th scope="col">id_producto</th>
      <th scope="col">nombre</th>
      <th scope="col">valor</th>
      <th scope="col">fecha_de_Caducidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

$query ="SELECT * FROM productos";
$res= mysqli_query($mysqli,$query);


while($mostrar= mysqli_fetch_array($res)){


?>
      <td data-label="id_producto"> <?php echo $mostrar['id_producto'] ?></td>
      <td data-label="nombre"> <?php echo $mostrar['nombre'] ?></td>
      <td data-label="valor"> <?php echo $mostrar['valor'] ?></td>
      <td data-label="fecha_caducidad"> <?php echo $mostrar['fecha_caducidad'] ?></td>
        </tr>

    <?php
    }
    ?>
</tbody>
</table>
</body>
</html>
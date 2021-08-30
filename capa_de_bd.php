<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'analisis_sistemas_ii');
if($mysqli){
echo "conexion exitosa";
}

$mysqli->set_charset("utf8");
$res = $mysqli->query("INSERT INTO productos VALUES (".$_GET["id_producto"].",'".$_GET["nombre"]."',".$_GET["valor"].",'".$_GET["fecha_de_Caducidad"]."')");
$res = $mysqli->query("SELECT * FROM productos");
while($f = $res->fetch_object()){
}
?>




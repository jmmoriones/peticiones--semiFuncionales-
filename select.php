<?php 
require 'conexion.php';
$sql = "SELECT `cedula`, `nombre`, `direccion`, `telefono`, `email`, `password` FROM `usuarios`";
$data = Array();
$resultado = $mysqli->query($sql);
/*while($row = $resultado->fetch_assoc()){
	$a = array($row['cedula'], $row['nombre']);
	array_push($data, $a);
}*/

while($array = $resultado->fetch_assoc()){
	$data[] = $array;
}

echo json_encode($data);

$mysqli->close();
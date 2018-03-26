<?php
require "conexion.php";
$post['id_cedula'] = $_POST['id_cedula'];

$sql = "SELECT `cedula`, `nombre`, `direccion`, `telefono`, `email`, `password` FROM `usuarios` WHERE cedula = '".$post['id_cedula']."'";
$array = array();

$resultado = $mysqli->query($sql);

while($data = $resultado->fetch_assoc()){
	$array[] = $data;
}

echo json_encode($array);

$mysqli->close();
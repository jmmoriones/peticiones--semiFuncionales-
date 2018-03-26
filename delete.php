<?php
require 'conexion.php';

$post['cedula_num'] = $_POST['cedula_num'];

$sql = "DELETE FROM usuarios WHERE usuarios.cedula ='".$post['cedula_num']."'";
$mysqli->query($sql);

$mysqli->close();


echo "Se ha eliminado";
<?php
require 'conexion.php';
$post['undefinedcedula_num'] = $_POST['undefinedcedula_num'];
$post['nombre_txt'] = $_POST['nombre_txt'];
$post['direccion_txt'] = $_POST['direccion_txt'];
$post['telefono_num'] = $_POST['telefono_num'];
$post['email_txt'] = $_POST['email_txt'];
$post['password_txt'] = $_POST['password_txt'];

$res = "";

$consulta = "INSERT INTO usuarios (cedula, nombre, direccion, telefono, email, password) VALUES ('".$post['undefinedcedula_num']."', '".$post['nombre_txt']."', '".$post['direccion_txt']."', '".$post['telefono_num']."', '".$post['email_txt']."', '".$post['password_txt']."')";

if ($mysqli->query($consulta) === true) {
    $res = "Se ha agregado";
} else {
    $res = "Error: " . $consulta . "<br>" . $mysqli->error;
}

echo $res;

$mysqli->close();
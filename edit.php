<?php 
require 'conexion.php';

$post['undefinedcedula_num'] = $_POST['undefinedcedula_num'];
$post['nombre_txt'] = $_POST['nombre_txt'];
$post['direccion_txt'] = $_POST['direccion_txt'];
$post['telefono_num'] = $_POST['telefono_num'];
$post['email_txt'] = $_POST['email_txt'];
$post['password_txt'] = $_POST['password_txt'];

$sql = "UPDATE usuarios SET nombre='".$post['nombre_txt']."',direccion='".$post['direccion_txt']."',telefono='".$post['telefono_num']."',email='".$post['email_txt']."',password='".$post['password_txt']."' WHERE cedula='".$post['undefinedcedula_num']."'";

if( $mysqli->query($sql) == TRUE ){
	echo 'se ha editado';
}else{
	echo "Hay un error".$mysqli->error;
}

$mysqli->close();


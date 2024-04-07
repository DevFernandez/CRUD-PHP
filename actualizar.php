<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$sentencia = $mysqli->prepare("UPDATE usuarios SET
nombre = ?,
correo = ?
WHERE id = ?");
$sentencia->bind_param("ssi", $nombre, $correo, $id);
$sentencia->execute();
header("Location: listar.php");

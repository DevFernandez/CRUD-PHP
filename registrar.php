<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$sentencia = $mysqli->prepare("INSERT INTO usuarios
(nombre, correo)
VALUES
(?, ?)");
$sentencia->bind_param("ss", $nombre, $correo);
$sentencia->execute();
header("Location: listar.php");

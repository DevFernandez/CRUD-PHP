<?php
$host = "sql106.infinityfree.com";
$usuario = "if0_36292022";
$contrasenia = "2zHo63a0xAS";
$base_de_datos = "if0_36292022_proyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;

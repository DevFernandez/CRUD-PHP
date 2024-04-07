<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, correo FROM usuarios WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$usuario = $resultado->fetch_assoc();
if (!$usuario) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar Usuario</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $usuario["nombre"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
            <label for="Correo">Correo</label>
                <input value="<?php echo $usuario["correo"] ?>" placeholder="Correo" class="form-control" type="email" name="correo" id="correo" required> 
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>

<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT * FROM usuarios");
$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de Usuarios</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success my-2" href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario["id"] ?></td>
                        <td><?php echo $usuario["nombre"] ?></td>
                        <td><?php echo $usuario["correo"] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $usuario["id"] ?>" class="btn btn-secondary" >Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $usuario["id"] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
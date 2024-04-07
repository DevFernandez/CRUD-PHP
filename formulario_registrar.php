
<?php include_once "encabezado.php"; ?>

<div class="row">
    <div class="col-12">
        <h1>Registrar Usuarios</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="Correo">Correo</label>
                <input placeholder="Correo" class="form-control" type="email" name="correo" id="correo" required>
            </div>
            <div class="form-group"><button class="btn btn-success">Guardar</button>
            <a class="btn btn-warning" href="listar.php">Volver</a>
        
        </div>
        </form>
    </div>
</div>


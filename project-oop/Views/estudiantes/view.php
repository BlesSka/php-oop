<div class="container box-principal">
    <div class="row panel panel-success">
        <div class="col panel-heading">
            <h2 class="panel-title">Edit Student <?= $datos['nombre']; ?></h2>
        </div>
    </div>
    <div class="panel-body container">
        <div class="row">
            <dvi class="col-4">
                <img class="img-resposive"
                     src='<?php echo URL; ?>Views/template/images/avatars/<?php echo $datos["imagen"]; ?>'
                     alt='<?php echo $datos["nombre"]; ?>'>
            </dvi>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Id Number: <?= $datos['id']; ?></label>
                </div>
                <div class="form-group">
                    <label>Name: <?= $datos['nombre']; ?></label>
                </div>
                <div class="form-group">
                    <label>Age: <?= $datos['edad']; ?></label>
                </div>
                <div class="form-group">
                    <div>Average: <?= $datos['promedio']; ?> </div>
                </div>
                <div class="form-group">
                    <div>Section: <?= $datos['nombre_seccion']; ?> </div>
                </div>
                <a class="btn-warning btn" href="/estudiantes/">Back</a>
            </div>
        </div>
    </div>
</div>

<div class="container box-principal">
    <div class="row panel panel-success">
        <div class="col panel-heading">
            <h2 class="panel-title">Edit Section <?= $datos['nombre']; ?></h2>
        </div>
    </div>
    <div class="panel-body container">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Id Number: <?= $datos['id']; ?></label>
                </div>
                <div class="form-group">
                    <label>Name: <?= $datos['nombre']; ?></label>
                </div>
                <a class="btn-warning btn" href="/estudiantes/">Back</a>
            </div>
        </div>
    </div>
</div>

<div class="container box-principal">
    <div class="row panel panel-success">
        <div class="col panel-heading">
            <h2 class="panel-title">Edit Section <?= $datos['nombre']; ?></h2>
        </div>
    </div>
    <div class="panel-body container">
        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name-form">Name</label>
                        <input type="text" class="form-control" name="name_f" id="name-form"
                               value="<?= $datos['nombre']; ?>"
                               placeholder="Name"
                               required>
                    </div>
                    <input type="hidden" class="form-control" name="id_f" id="id_f"
                           value="<?= $datos['id']; ?>">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-warning">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
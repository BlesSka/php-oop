<?php $sections = $students->listSections(); ?>
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
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name-form">Name</label>
                        <input type="text" class="form-control" name="name_f" id="name-form"
                               value="<?= $datos['nombre']; ?>"
                               placeholder="Name"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="age-form">Age</label>
                        <input type="number" class="form-control" name="age_f" id="age-form" placeholder="Age"
                               value="<?= $datos['edad']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="average-form">Average</label>
                        <input type="number" class="form-control" name="average_f" id="average-form"
                               placeholder="Average"
                               value="<?= $datos['promedio']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="seccion_form">Seccion</label>
                        <select class="form-control" name="seccion_f" id="seleccion-form" required>
                            <option value="Select">Select</option>
                            <?php while ($row = mysqli_fetch_array($sections)) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" class="form-control" name="id_f" id="id_f"
                           value="<?= $datos['id']; ?>" required>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-warning">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
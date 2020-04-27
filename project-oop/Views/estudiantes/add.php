<div class="container box-principal">
    <h2 class="titulo">Students Add</h2>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4 class="panel-title">New Student</h4>
        </div>
    </div>
    <div class="panel-body container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name-form">Name</label>
                        <input type="text" class="form-control" name="name_f" id="name-form" placeholder="Name"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="age-form">Age</label>
                        <input type="number" class="form-control" name="age_f" id="age-form" placeholder="Age" required>
                    </div>
                    <div class="form-group">
                        <label for="average-form">Average</label>
                        <input type="number" class="form-control" name="average_f" id="average-form"
                               placeholder="Average" required>
                    </div>
                    <div class="form-group">
                        <label for="password-form">Password</label>
                        <input type="password" class="form-control" name="password_f" id="password-form"
                               placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="seccion_form">Seccion</label>
                        <select class="form-control" name="seccion_f" id="seleccion-form" required>
                            <option value="Select">Select</option>
                            <?php while ($row = mysqli_fetch_array($datos)) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <label for="image-form">Image</label>
                        <input type="file" class="form-control" name="imagen" id="imagen" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
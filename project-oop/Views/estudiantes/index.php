<div class="container">
    <h1 class="text-center">Main view Students</h1>
    <div class="container">
        <h2 class="col bg-dark text-light">Students list</h2>
        <table class="table table-striped table-dark table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagen</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Average</th>
                <th scope="col">Seccion</th>
            </tr>
            </thead>
            <tbody>

            <?php
            while ($row = mysqli_fetch_array($datos)) {
                ?>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <td>
                        <img class="img-avatar img-thumbnail"
                             src='<?php echo URL; ?>Views/template/images/avatars/<?php echo $row["imagen"]; ?>'
                             alt='<?php echo $row["nombre"]; ?>'>
                    </td>
                    <td class="text-primary">
                        <a href="<?= URL . 'estudiantes/view/' . $row['id']; ?>"><?php echo $row['nombre']; ?></a>
                    </td>
                    <td><?php echo $row['edad']; ?></td>
                    <td><?php echo $row['promedio']; ?></td>
                    <td><?php echo $row['nombre_seccion']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo URL; ?>estudiantes/edit/<?php echo $row['id'];
                        ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/delete/<?php echo $row['id'];
                        ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

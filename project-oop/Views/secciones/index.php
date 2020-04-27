<div class="container">
    <h1 class="text-center">Main view Sections </h1>
    <div class="container">
        <div class="col bg-dark text-light">List of Sections</div>
        <table class="table table-striped table-dark table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_array($datos)) {
                ?>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <td><a href="<?= URL . 'secciones/view/' . $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
                    <td>
                            <a class="btn btn-warning" href="<?php echo URL; ?>secciones/edit/<?php echo $row['id'];
                        ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo URL; ?>secciones/delete/<?php echo $row['id'];
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

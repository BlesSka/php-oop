<div class="container">
    <h1 class="text-center">Vista del estudiantes Principal </h1>
    <?php
    $objdatos = $estudiantes->index();
    while ($row = mysqli_fetch_array($objdatos)) {
        echo "<div class=\"text-primary\">" . $row['nombre'] . "</div>";
    }
    ?>
</div>

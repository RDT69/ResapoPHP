<?php
$num_personas = $_POST['num_personas'];

for ($i = 1; $i <= $num_personas; $i++) {
    $nombre = strtoupper($_POST['nombre_' . $i]);
    $antiguedad = $_POST['antiguedad_' . $i];
    $fecha_nacimiento = $_POST['fecha_nacimiento_' . $i];

    $edad = date_diff(date_create($fecha_nacimiento), date_create('today'))->y;

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$antiguedad</td>";
    echo "<td>$edad</td>";
    if ($antiguedad > 5) {
        echo "<td style='background-color: yellow'>";
    } else {
        echo "<td>";
    }
    echo "</tr>";
}
?>


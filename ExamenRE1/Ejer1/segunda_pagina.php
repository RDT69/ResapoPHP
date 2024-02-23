<?php
$num_personas = $_GET['num_personas'];

echo "<form action='tercera_pagina.php' method='post'>";

for ($i = 1; $i <= $num_personas; $i++) {
    echo "Persona $i:<br>";
    echo "Nombre: <input type='text' name='nombre_$i'><br>";
    echo "Antigüedad: <input type='number' name='antiguedad_$i'><br>";
    echo "Fecha de nacimiento: <input type='date' name='fecha_nacimiento_$i'><br><br>";
}

echo "<input type='submit' value='Enviar'>";
echo "</form>";
?>

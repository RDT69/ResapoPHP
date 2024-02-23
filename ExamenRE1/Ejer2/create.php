<?php

// Manejar el envío del formulario
if (isset($_POST["submit"])) {
  // Validar la entrada
  $country = $_POST["country"];
  $material = $_POST["material"];
  $tons = $_POST["tons"];

  // Insertar el nuevo registro
  $sql = "INSERT INTO imports (country, material, tons) VALUES ($country, $material, $tons)";
  $stmt -> prepare($sql);
  $stmt->execute([
    ":country" => $country,
    ":material" => $material,
    ":tons" => $tons,
  ]);

  // Redirigir a la página de listado
  header("Location: main.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadir nuevo registro</title>
</head>
<body>
  <h1>Añadir nuevo registro</h1>
  <form method="post">
    <label for="country">País:</label>
    <input type="text" name="country" id="country" required>

    <label for="material">Material:</label>
    <input type="text" name="material" id="material" required>

    <label for="tons">Toneladas:</label>
    <input type="number" name="tons" id="tons" required>

    <button type="submit" name="submit">Añadir</button>
  </form>
</body>
</html>
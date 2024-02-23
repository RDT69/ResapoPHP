<?php

// Obtener el ID del registro a eliminar
$id = $_GET["id"];

// Eliminar el registro con la ID especificada
$sql = "DELETE FROM imports WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([":id" => $id]);

// Redirigir a la página de listado
header("Location: main.php");

?>
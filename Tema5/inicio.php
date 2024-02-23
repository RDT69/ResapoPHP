<?php
$tiempo = time() +172800;

//Si ya tiene sesion iniciada, redirigir
if(isset($_COOKIE['nombre'])){
    //Se le vuelve a actualizar el tiempo.
    setcookie('nombre', $_COOKIE['nombre'], $tiempo);
    header('Location: reto.php');
}

if (isset($_POST['enviar']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    setcookie('nombre', $nombre, $tiempo);
    header('Location: reto.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al juego de las preguntas diarias</h1>
    <form method="POST">
        <p>¿Por favor ingrese su nombre?</p>
        <input type="text" name="nombre">
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>
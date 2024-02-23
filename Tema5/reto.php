<?php
require_once "preguntas (1).php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// Si no a entrado nunca.
if (!isset($_COOKIE['nombre'])) {
    header('Location: inicio.php');
    exit;   
}
        
?>
    <form method="post"></form>
    <br>
    <?php
    echo   "<h1> " . $_COOKIE['nombre'] . "<a href='finalizar-participacion.php?accion=finalizar'> EliminarUsuario</a>
    <a href='ver-puntuacion'> Ver puntuaciones </a></h1>";
    ?>
    <h1>Reto Diario</h1>
    
    <?php  
    
    $fechaActual = date("21-12-2023");
    $temaEncontrado = false;

    foreach($preguntasDiarias as $fecha => $temaD){
        if($fecha === $fechaActual){
            $tema = $temaD['tema'];
            $temaEncontrado = true;
            break;
        } 
    };

    if($temaEncontrado){
        echo "<h1><b> Fecha: " . $fecha . " |TEMA: " . $tema . "</b></h1>";
        $preguntasDelDia = count($preguntasDiarias[$fechaActual]['preguntas']);
        $indiceP = 0;
        echo "<p> Pregunta " . ($indiceP + 1 )." de ". $preguntasDelDia ."</p>";
        
        foreach($preguntasDiarias[$fechaActual]['preguntas'] as $indiceP => $pregunta){
           
                echo "<h3>" . $pregunta['enunciado'] . "</h3>";  
                $respuestaCorrecta = $pregunta['respuesta_correcta'];
                foreach($pregunta['opciones'] as $indiceP => $opcion){
                    echo "<input type='radio' name='respuesta'>$opcion<br>";
                }
            echo "<br>";
            echo "<button type='submit' name='respuesta1'>Enviar</button>";
            break;
        }
        if (isset($_POST['respuesta1'])) {
            $respuesta = $_POST['respuesta'];
            if ($respuesta === $respuestaCorrecta) {
                echo "Respuesta Correcta";
            } else {
                echo "Respuesta Incorrecta";
            }
        }
    }
      
    
    
   

   
   
    

    ?>
</form>
</body>
</html>
<?php
if (isset($_GET['accion']) && $_GET['accion'] === 'finalizar') {
    setcookie('nombre', '', time() - 3600);
    header("Location: inicio.php");
    exit;
  }



  
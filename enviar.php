<?php
$destino = "juli.ravasi00@gmail.com";
$nombre = $_POST ["nombre"];

$contenido = "nombre: " . $nombre;

mail($destino,"contacto",$contenido);
?>
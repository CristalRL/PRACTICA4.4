<?php
$archivo = './json/tempMyMByHour-14hrs.json';
if (file_exists($archivo)) {
    $handle = fopen($archivo, 'r') or die("Error: No se puede abrir el archivo json");
    $size = filesize($archivo);
    $contenido = fread($handle, $size);
    fclose($handle);
    $listaTemper = json_decode($contenido, true);
    echo '<br>';
    foreach ($listaTemper as $hora => $temp) {
    echo ($hora . ' - ' . $temp) . '<br>';
    }
    }
    
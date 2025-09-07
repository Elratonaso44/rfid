<?php

$mensaje = $_POST['mensaje'];

echo "Esp32 mando por POST: " . $mensaje."<br>";

file_put_contents("esp32.txt", $mensaje);

echo "Datos guardados en el archivo 'Datos de la esp32.txt'";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos de la esp32</title>
</head>
<body>
    
</body>
</html>
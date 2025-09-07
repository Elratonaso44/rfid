<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Datos de ESP32</title>
  <meta http-equiv="refresh" content="1">
</head>
<body>
  <h1>Último mensaje de la ESP32:</h1>
  <p>
    <?php
          echo file_get_contents("esp32.txt");
    ?>
  </p>
</body>
</html>

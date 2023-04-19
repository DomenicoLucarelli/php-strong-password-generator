<?php

$userNumber = $_GET['length'] ?? '';

include './partials/function.php'
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

  <form action="index.php" method="GET">
    <label for="length">Inserisci la lunghezza della password </label>
    <input name="length" type="number" min="8" id="length" required>

    <input type="submit" >

  </form>

  <span>La tua password randome è: <?php echo passwordGenerator($userNumber) ?></span>
    
</body>
</html>
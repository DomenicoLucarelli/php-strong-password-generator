
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <style>
      form{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        justify-content: center;
        height: 100vh;
      }
    </style>
</head>
<body>

  <form action="password.php" method="GET">
    <label for="length">Inserisci la lunghezza della password </label>
    <input name="length" type="number" min="8" id="length" required>

    <input type="submit" >

  </form>

  
    
</body>
</html>
<?php
function generaStringaRandom($lunghezza)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringaRandom = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Inserisci password</h1>
        <form method="GET">
            <input type="text" name="password" id="password" required>
            <button class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>

</html>
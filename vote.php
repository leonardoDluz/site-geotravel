<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pop-up.css">
    <title>Document</title>
</head>
<body>
    <button type="button" onClick="voto('caprichoso')">Caprichoso</button>
    <div class="pop-up caprichoso">
        <button type="button" onClick="voto('Xcaprichoso')">X</button>
        <form action="./voting.php" method="post">
            <input name="voto" value="caprichoso" hidden>
            <label for="usuario">Nome: </label>
            <input name="usuario" type="text" required>
            <button type="submit">Votar</button>
        </form>
    </div>
    <button type="button" onClick="voto('garantido')">Garantido</button>
    <div class="pop-up garantido">
        <button type="button" onClick="voto('Xgarantido')">X</button>
        <form action="./voting.php" method="post">
            <input name="voto" value="garantido" hidden>
            <label for="usuario">Nome: </label>
            <input name="usuario" type="text" required>    
            <button type="submit">Votar</button>
        </form>
    </div>
    <script src="./index.js"></script>
</body>
</html>
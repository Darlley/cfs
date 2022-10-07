<?php
    echo $_POST['nome']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">
            Seu nome: 
            <input type="text" id="nome" name="nome" placeholder="Escreva seu nome aqui">
        </label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
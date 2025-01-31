<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão</title>
</head>
<body>
    <h2>Impressão</h2>

<form action = "dados.php" method = "post">
    <label for = "nome">nome:</label>
    <input type = "text" id="nome" name="nome" required><br> <br>
    <label for = "idade">idade:</label>
    <input type = "number" id="idade" name="idade" required><br> <br>
    <label for = "cidade">cidade:</label>
    <input type = "text" id="cidade" name="cidade" required><br> <br>

    <input type = "submit" value= "enviar">
    </form>


</body>
</html>
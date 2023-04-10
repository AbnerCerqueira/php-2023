<?php
session_start();

if (
    (!isset($_SESSION['usuario']) == true
        &&
        !isset($_SESSION['senha']) == true)
) {


    header('location:index.php');
}



$login = $_SESSION['usuario'];
echo 'Bem vindo ' . $login;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <title>SISTEMINHA MERCADO</title>
</head>

<body>
    <fieldset>
        <form action="Estoquecontroller.php" method="post">
            <p>
                <label>NOME PRODUTO</label>
                <input type="text" name="nome_produto" autofocus required>
            </p>
            <p>
                <label>PREÇO COMPRA</label>
                <input type="text" name="preco_compra" required>
            </p>
            <p>
                <label>PREÇO VENDA</label>
                <input type="text" name="preco_venda" required>
            </p>
            <p>
                <label>QUANTIDADE</label>
                <input type="text" name="qtde" required>
            </p>
            <p>
                <label>DATA COMPRA</label>
                <input type="date" name="data_compra" required>
            </p>
            <input type="submit" value="CADASTRAR" name="botao" id="botao" class="submits">
            </p>
            <p>
                <a href="consultar.php">FAZER CONSULTA</a>
            </p>
            <p>
                <a href="atualizar.php">ATUALIZAR ESTOQUE</a>
            </p>
        </form>
        <form action="deslogar.php" method="post">
            <p>
                <input type="submit" value="DESLOGAR" class="submits">
            </p>
        </form>
    </fieldset>
</body>

</html>
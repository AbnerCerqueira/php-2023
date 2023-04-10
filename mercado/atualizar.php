<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <title>ATUALIZAR</title>
</head>

<body>
    <fieldset>
        <form action="Estoquecontroller.php" method="post">
            <p>
                <label>NOME PRODUTO</label>
                <input type="text" name="nome_produto" autofocus required>

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
            <p>
                <label>ID PRODUTO</label>
                <input type="text" name="id_produto" required>
            </p>
            </p>
            <input type="submit" value="ATUALIZAR" name="botao" class="submits">
            </p>
        </form>
    </fieldset>
</body>

</html>
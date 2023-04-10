<?php
include 'Estoquedao.php';

$estoque = new EstoqueDao();
$dados = $estoque->Consultar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <title>CONSULTAR</title>
</head>

<body>
    <fieldset>
        <?php
        foreach ($dados as $produtos) : ?>
            <table>
                <tr>
                    <td><?php echo $produtos['nome_produto']; ?></td>
                    <td><?php echo 'R$' . $produtos['preco_compra']; ?></td>
                    <td><?php echo 'R$' . $produtos['preco_venda']; ?></td>
                    <td><?php echo $produtos['qtde']; ?></td>
                    <td><?php echo $produtos['data_compra']; ?></td>

                    <td>
                        <form action="Estoquecontroller.php" method="post">
                            <input type="hidden" name="id_produto" value="<?php echo $produtos['id_produto']; ?>">
                            <input type="submit" value="DELETAR" name="botao" class="submits">
                        </form>
                    </td>
                </tr>
            </table>
        <?php endforeach; ?>
    </fieldset>
</body>

</html>
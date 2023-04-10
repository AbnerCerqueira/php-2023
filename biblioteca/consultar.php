<?php
require_once 'Dao.php';

$biblioteca = new Dao();
$livros = $biblioteca->Consultar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            background-color: #ffffff;
            table-layout: fixed;
        }

        table,
        th,
        td {
            text-align: center;
            border: 1px solid;
        }

        td {
            width: 120px;
            height: 70px;
        }

        form {
            text-align: center;
        }



        a {
            color: #191970;
        }

        body {
            background-color: #ffffff;
        }

        #botao {
            height: 30px;
            border-radius: 5px;
            background-color: #ffffff;
        }

        #botao:hover {
            background-color: #d8bfd8;
        }

        .container {
            margin: auto;
            background-color: pink;
            display: flex;
            justify-content: space-evenly;
            border: 2px solid black;
            box-shadow: 5px 5px 15px;
            width: 80vw;
            border-radius: 5px;
        }

        img {
            position: fixed;
            height: 70px;
        }

        img:hover {
            height: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <form action="Controller.php" method="post">
                <p>

                    <?php
                    foreach ($livros as $dados) : ?>
                <table>
                    <tr>
                        <td><?php echo $dados['id_livro']; ?></td>
                        <td><?php echo $dados['nome_livro']; ?></td>
                        <td><?php echo $dados['data_aluguel']; ?></td>

                        <td>
                            <form action="Controller.php" method="post">
                                <input type="hidden" name="id_livro" value="<?php echo $dados['id_livro']; ?>">
                                <input type="submit" value="DELETAR" name="acao" id="botao">
                            </form>
                        </td>
                    </tr>
                </table>
            <?php endforeach; ?>
            </p>
        </div>

        <div>
            <form action="Controller.php" method="post">
                <p>ATUALIZAR DADOS &#128071;</p>

                <p>
                    <label>Nome atualizado</label>
                    <input type="text" name="nome_livro" autofocus required>
                </p>

                <p><label>Data atualizada</label>
                    <input type="date" name="data_aluguel" required>
                </p>

                <p>
                    <label>ID do livro que vai mudar</label>
                    <input type="text" name="id_livro" required>
                </p>

                <p>
                    <input type="submit" value="ATUALIZAR" name="acao" id="botao">
                </p>


            </form>
        </div>

    </div>
    <a href="principal.php"><img src="seta-esquerda.png"></a>
</body>

</html>
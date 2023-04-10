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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVRARIA</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
        }

        form {
            text-align: center;
        }

        fieldset {
            margin: auto;
            border-color: #00493e;
            border-radius: 5px;
            background-color: pink;
            width: 70%;
            border-color: black;
            box-shadow: 5px 5px 15px;
        }

        a {
            color: #191970;
        }

        body {
            background-color: #ffffff;
        }

        .botao {
            height: 30px;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .botao:hover {
            background-color: #d8bfd8;
        }

        #consulta {
            position: fixed;
            height: 70px;
            right: 1px;
        }

        #consulta:hover {
            height: 80px;
        }

        #form-deslogar{
            position: fixed;
        }
    </style>
</head>

<body>
    <form action="deslogar.php" method="post" id="form-deslogar">
        <p>
            <input type="submit" value="SAIR" class="botao">
        </p>
    </form>

    <form action="Controller.php" method="post">
        <fieldset>
            <?php echo 'Bem vindo ' . $login . '&#128512'; ?>
            <p>
                <label>Nome do livro</label>
                <input type="text" name="nome_livro" autofocus required>
            </p>
            <p>
                <label>Data do aluguel</label>
                <input type="date" name="data_aluguel" required>
            </p>

            <input type="submit" value="CADASTRAR" name="acao" class="botao">
            </p>
    </form>

    </fieldset>


    <a href="consultar.php"><img src="seta-direita.png" id="consulta"></a>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
    </style>
</head>

<body>
    <fieldset>
        <form action="login.php" method="post">
            <p>
                <label>USUARIO</label>
                <input type="text" name="usuario" required autofocus>
            </p>

            <p>
                <label>SENHA</label>
                <input type="password" name="senha" required>
            </p>

            <p>
            <input type="submit" value="LOGAR" id="botao">
            </p>
        </form>
    </fieldset>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
</head>

<body>
    <fieldset>
        <form action="validalogin.php" method="post">
            <p>
                <label>USUARIO</label>
                <input type="text" name="usuario" required autofocus>
            </p>

            <p>
                <label>SENHA</label>
                <input type="password" name="senha" required>
            </p>

            <p>
                <input type="submit" value="LOGAR" class="submits">
            </p>
        </form>
    </fieldset>
</body>

</html>
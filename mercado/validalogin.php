<?php
session_start();

require_once 'conexao.php';

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$sql1 = "select * from login where usuario=? and senha=?";


$banco = new Conexao();
$conn = $banco->getConexao();

$stmt = $conn->prepare($sql1);
$stmt->bindParam(1, $usuario);
$stmt->bindParam(2, $senha);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('location: estoqueprincipal.php');
} else {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('location: index.php');
}

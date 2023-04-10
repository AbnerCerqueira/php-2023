<?php
require_once 'Dao.php';
require_once 'Biblioteca.php';

$id_livro = filter_input(INPUT_POST, 'id_livro');
$nome_livro = filter_input(INPUT_POST, 'nome_livro');
$data_aluguel = filter_input(INPUT_POST, 'data_aluguel');
$acao = filter_input(INPUT_POST, 'acao');

$biblioteca = new Biblioteca();
$dao = new Dao();

$biblioteca->setId_livro($id_livro);
$biblioteca->setNome_livro($nome_livro);
$biblioteca->setData_aluguel($data_aluguel);

if($acao=='CADASTRAR'){
    $dao->Cadastrar($biblioteca);
}else if($acao =='ATUALIZAR'){
    $dao->Atualizar($biblioteca);
}else if($acao == 'DELETAR'){
    $dao->Apagar($biblioteca);
}
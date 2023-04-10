<?php
require_once 'Estoquedao.php';
require_once 'Estoque.php';

$id_produto = filter_input(INPUT_POST, 'id_produto');
$nome_produto = filter_input(INPUT_POST, 'nome_produto');
$preco_compra = filter_input(INPUT_POST, 'preco_compra');
$preco_venda = filter_input(INPUT_POST, 'preco_venda');
$data_compra = filter_input(INPUT_POST, 'data_compra');
$qtde = filter_input(INPUT_POST, 'qtde');
$acao = filter_input(INPUT_POST, 'botao');

$estoque = new Estoque();
$dao = new EstoqueDao();

$estoque->setId_produto($id_produto);
$estoque->setNome_produto($nome_produto);
$estoque->setPreco_compra($preco_compra);
$estoque->setPreco_venda($preco_venda);
$estoque->setData_compra($data_compra);
$estoque->setQtde($qtde);

if ($acao == 'CADASTRAR') {
    $dao->Cadastrar($estoque);
} else if ($acao == 'ATUALIZAR') {
    $dao->Atualizar($estoque);
} else if ($acao == 'DELETAR') {
    $dao->Apagar($estoque);
}
?>

<form action="deslogar.php" method="post">
    <p>
        <input type="submit" value="DESLOGAR" class="submits">
    </p>
</form>
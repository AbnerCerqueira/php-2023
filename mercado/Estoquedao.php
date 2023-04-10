<?php
require_once 'Conexao.php';
class EstoqueDao
{
    public function Cadastrar(Estoque $est)
    {
        $sql1 = "insert into estoque
        values('',?,?,?,?,?);";


        $banco = new Conexao();
        $conn = $banco->getConexao();
        
        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $est->getNome_produto());
        $stmt->bindValue(2, $est->getPreco_compra());
        $stmt->bindValue(3, $est->getPreco_venda());
        $stmt->bindValue(4, $est->getQtde());
        $stmt->bindValue(5, $est->getData_compra());

        if ($stmt->execute()) {
            echo 'CADASTRADO COM SUCESSO <a href="estoqueprincipal.php">PAGINA INICIAL</a>';
        } else {
            echo 'ERRO AO CADASTRAR';
        }
    }
    public function Consultar()
    {
        $sql1 = "select * from estoque";

        $banco = new Conexao();
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
    #==================================================================
    public function Atualizar(Estoque $est)
    {
        $sql1 = "update
        estoque
    set
        nome_produto =?,
        preco_compra = ?,
        preco_venda = ?,
        qtde = ?,
        data_compra = ?
    where
        id_produto=?;";


        $banco = new Conexao();
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $est->getNome_produto());
        $stmt->bindValue(2, $est->getPreco_compra());
        $stmt->bindValue(3, $est->getPreco_venda());
        $stmt->bindValue(4, $est->getQtde());
        $stmt->bindValue(5, $est->getData_compra());
        $stmt->bindValue(6, $est->getId_produto());

        if ($stmt->execute()) {
            echo 'ATUALIZADO COM SUCESSO';
        } else {
            echo 'ERRO AO ATUALIZAR';
        }
    }
    #==============================================================
    public function Apagar(Estoque $est)
    {
        $sql1 = "delete
        from
            estoque
        where
            id_produto = ?;";


        $banco = new Conexao();
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $est->getId_produto());

        if ($stmt->execute()) {
            echo 'DELETADO COM SUCESSO <a href="consultar.php">CONSULTAR DE NOVO</a>';
        } else {
            echo 'ERRO AO DELETAR';
        }
    }
}

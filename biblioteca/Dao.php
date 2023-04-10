<?php
require_once 'Conexao.php';
class Dao
{
    public function Cadastrar(Biblioteca $b)
    {
        $sql1 = "insert into biblioteca
        values('',?,?);";
        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $b->getNome_livro());
        $stmt->bindValue(2, $b->getData_aluguel());

        $result = $stmt->execute();

        if ($result) {
            header('location:http://localhost/biblioteca/consultar.php');
        } else {
            echo 'ERRO AO CADASTRAR';
        }
    }

    public function Consultar()
    {
        $sql1 = "select * from biblioteca";

        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
    #==================================================================
    public function Atualizar(Biblioteca $b)
    {
        $sql1 = "update
        biblioteca
    set
        nome_livro =?,
        data_aluguel = ?
    where
        id_livro=?;";

        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $b->getNome_livro());
        $stmt->bindValue(2, $b->getData_aluguel());
        $stmt->bindValue(3, $b->getId_livro());

        if ($stmt->execute()) {
            header('location:http://localhost/biblioteca/consultar.php');
        } else {
            echo 'ERRO AO ATUALIZAR';
        }
    }
    #==============================================================
    public function Apagar(Biblioteca $b)
    {
        $sql1 = "delete
        from
            biblioteca
        where
            id_livro = ?;";

        $banco = new Conexao;
        $conn = $banco->getConexao();

        $stmt = $conn->prepare($sql1);
        $stmt->bindValue(1, $b->getId_livro());

        if ($stmt->execute()) {
            header('location:http://localhost/biblioteca/consultar.php');
        } else {
            echo 'ERRO AO DELETAR';
        }
    }
}

<?php
class Biblioteca
{
    private $id_livro, $nome_livro, $data_aluguel;

    public function getId_livro()
    {
        return $this->id_livro;
    }
    public function setId_livro($id_livro)
    {
        $this->id_livro = $id_livro;
    }
    //=====================================================
    public function getNome_livro()
    {
        return $this->nome_livro;
    }
    public function setNome_livro($nome_livro)
    {
        $this->nome_livro = $nome_livro;
    }
    //==========================================
    public function getData_aluguel()
    {
        return $this->data_aluguel;
    }
    public function setData_aluguel($data_aluguel)
    {
        $this->data_aluguel = $data_aluguel;
    }
}

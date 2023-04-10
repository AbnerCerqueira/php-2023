<?php
class Estoque
{
    private $id_produto, $nome_produto, $preco_compra, $preco_venda, $qtde, $data_compra;

    public function getId_produto()
    {
        return $this->id_produto;
    }
    public function setId_produto($id_produto)
    {
        $this->id_produto = $id_produto;
    }
    //=====================================================
    public function getNome_produto()
    {
        return $this->nome_produto;
    }
    public function setNome_produto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }
    //==========================================
    public function getPreco_compra()
    {
        return $this->preco_compra;
    }
    public function setPreco_compra($preco_compra)
    {
        $this->preco_compra = $preco_compra;
    }
    //===================================================
    public function getPreco_venda()
    {
        return $this->preco_venda;
    }
    public function setPreco_venda($preco_venda)
    {
        $this->preco_venda = $preco_venda;
    }
    //=================================================
    public function getQtde()
    {
        return $this->qtde;
    }
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;
    }
    //=================================================
    public function getData_compra()
    {
        return $this->data_compra;
    }
    public function setData_compra($data_compra)
    {
        $this->data_compra = $data_compra;
    }
}

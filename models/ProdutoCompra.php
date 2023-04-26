<?php

class ProdutoCompra{
    private $preco_custo;
    private $qtde;
    private $produto;
    private $compra;

    public function __construct($preco_custo, $qtde, Produto $produto, Compra $compra)
    {
        $this->preco_custo = $preco_custo;
        $this->qtde = $qtde;
        $this->produto = $produto;
        $this->compra = $compra;
    }

    
    /**
     * Get the value of preco_custo
     */ 
    public function getPreco_custo()
    {
        return $this->preco_custo;
    }

    /**
     * Set the value of preco_custo
     *
     * @return  self
     */ 
    public function setPreco_custo($preco_custo)
    {
        $this->preco_custo = $preco_custo;

        return $this;
    }

    /**
     * Get the value of qtde
     */ 
    public function getQtde()
    {
        return $this->qtde;
    }

    /**
     * Set the value of qtde
     *
     * @return  self
     */ 
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;

        return $this;
    }

    /**
     * Get the value of produto
     */ 
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Set the value of produto
     *
     * @return  self
     */ 
    public function setProduto(Produto $produto)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get the value of compra
     */ 
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set the value of compra
     *
     * @return  self
     */ 
    public function setCompra(Produto $compra)
    {
        $this->compra = $compra;

        return $this;
    }
}
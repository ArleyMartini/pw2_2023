<?php

class ProdutoVenda{
    private $qtde;
    private $valor_unitario;
    private $valor_total;
    private $venda;
    private $produto;

    public function __construct($qtde, $valor_unitario, $valor_total, Venda $venda, Produto $produto)
    {
        $this->qtde = $qtde;
        $this->valor_unitario = $valor_unitario;
        $this->valor_total = $valor_total;
        $this->venda = $venda;
        $this->produto = $produto;
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
     * Get the value of valor_unitario
     */ 
    public function getValor_unitario()
    {
        return $this->valor_unitario;
    }

    /**
     * Set the value of valor_unitario
     *
     * @return  self
     */ 
    public function setValor_unitario($valor_unitario)
    {
        $this->valor_unitario = $valor_unitario;

        return $this;
    }

    /**
     * Get the value of valor_total
     */ 
    public function getValor_total()
    {
        return $this->valor_total;
    }

    /**
     * Set the value of valor_total
     *
     * @return  self
     */ 
    public function setValor_total($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->venda;
    }

    /**
     * Set the value of venda
     *
     * @return  self
     */ 
    public function setUsuario(Venda $venda)
    {
        $this->venda = $venda;

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
}
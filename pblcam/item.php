<?php

class Item {
    
    public $nome_cliente;
    public $descricao_produto;
    public $endereco_cliente;
    public $produto;
    public $qtd_produto;
    
    
    function __construct ($nome_cliente, $descricao_produto, $endereco_cliente, $produto, $qtd_produto){
        $this->nome_cliente = $nome_cliente;
        $this->descricao_produto = $descricao_produto;
        $this->endereco_cliente = $endereco_cliente;
        $this->produto = $produto;
        $this->qtd_produto = $qtd_produto;
    }
    
}

?>
<?php

class Item {
    
    public $nome_client;
    public $descricao_cliente;
    public $endereco_client;
    public $produto;
    public $qtd_produto;
    
    
    function __construct ($nome_client, $descricao_produto, $endereco_client, $produto, $qtd_produto){
        $this->nome_client = $nome_client;
        $this->descricao_cliente = $descricao_cliente;
        $this->endereco_client = $endereco_client;
        $this->produto = $produto;
        $this->qtd_produto = $qtd_produto;
    }
    
}

?>
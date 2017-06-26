<?php

/* Define uma rota */
include("item.php");

/* Salva os items cadastrados */
if(!isset($items_cadastrados)){
    $items_cadastrados = array();
}

/* Verifica se recebemos um POST */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST["nome-cliente"]) and (strlen($_POST["nome-cliente"]) == 0)){
        $mensagem_erro = "Favor inserir seu nome";
        $item_nao_inserido = true;
    }
    else if((!isset($_POST["descricao-produto"])) and (strlen($_POST["descricao-produto"]) == 0)){
        $mensagem_erro = "Favor escrever a descrição do produto";
        $item_nao_inserido = true;
    }
    else if((!isset($_POST["endereco-cliente"])) and (strlen($_POST["endereco-cliente"]) == 0)){
        $mensagem_erro = "Favor selecionar o endereço de entrega";
        $item_nao_inserido = true;
    }
    else if((!isset($_POST["produto"])) and (strlen($_POST["produto"]) == 0)){
        $mensagem_erro = "Favor selecionar o produto";
        $item_nao_inserido = true;
    }
    else if((!isset($_POST["qtd-produto"])) and (intval($_POST["qtd-produto"]) == 0)){ // IVISH
        $mensagem_erro = "Favor escolher ao menos um produto";
        $item_nao_inserido = true;
    }
    else{
        
        /* Se tá tudo OK */
        $nome_cliente = $_POST["nome-clliente"];
        $descricao_produto = $_POST["descricao-produto"];
        $endereco_cliente = $_POST["endereco-cliente"];
        $produto = $_POST["produto"];
        $qtd_produto = intval($_POST["qtd-produto"]);
        
        /* Instacia o novo item */
        $novo_item = new Item($nome_cliente, $descricao_produto, $endereco_cliente, $produto, $qtd_produto);
        
        /* Salva o Item --- TEMPORARIO */
        array_push($items_cadastrados, $novo_item);
        
        /* Codigo de acerto */
        $mensagem_extra = count($items_cadastrados);
        $item_inserido = true;
    }
    
    /* Mostra o resultado */
    include("adicionar_item.php");
} else {
    /* Se recebemos uma requisição diferente de POST mostrar error */
    echo "<h1> METODO NAO SUPORTADO PELO CONTROLADOR! </h1>";
}

?>
<?php
$adiciona_ativo = true;
include("template/header.php");
?>

<div class="container menu-espaco">
<?php
    if(isset($item_inserido)){
        echo "<div class=\"alert alert-success\" role=\"alert\"><b>Item inserido com sucesso </b> ".$mensagem_extra."</div>";
    }
    else if(isset($item_nao_inserido)){
        echo "<div class=\"alert alert-danger\" role=\"alert\"><b>Item não inserido </b> ".$mensagem_erro."</div>";
    } 
?>
<h1>Inserir Item no Caminhão</h1>
<form action="salva_item.php" method="post" class="form-group">
    <div>
        <div class="input-group meu-input-group">
            <span class="input-group-addon" id="nome-cliente">Nome Cliente</span>
            <input name="nome-cliente" type="text" class="form-control" placeholder="Digite seu Nome" aria-describedby="nome-cliente">
        </div>
    </div>
    <div class="input-group meu-input-group">
        <span class="input-group-addon" id="descricao-produto">Descrição Produto</span>
        <input name="descricao-produto" type="textarea" class="form-control" placeholder="Digite uma descrição do produto" aria-describedby="descricao-produto">
    </div>
    <div class="input-group meu-input-group">
        <span class="input-group-addon" id="endereco-valor">Selecione o bairro a ser enviado</span>
        <select name="endereco-cliente" id="endereco-cliente" class="form-control" aria-describedby="endereco-valor">
            <option value="terra"> Bairro Terra </option>
            <option value="urano"> Bairro Urano </option>
            <option value="venus"> Bairro Vênus </option>
            <option value="jupiter"> Bairro Júpiter </option>
            <option value="saturno"> Bairro Saturno </option>
        </select>
    </div>
    <div class="row meu-input-group">
        <div class="espaco-radio col-md-3 col-xs-12">
            <div class="input-group">
                <span class="meu-grupo-addon input-group-addon">
                    <input type="radio" aria-label="televisao selecionar" name="produto" valor="televisao"> Televisão
                </span>
            </div>
        </div>
        <div class="espaco-radio col-md-3 col-xs-12">
            <div class="input-group">
                <span class="meu-grupo-addon input-group-addon">
                    <input type="radio" aria-label="geladeira selecionar" name="produto" valor="geladeira"> Geladeira
                </span>
            </div>
        </div>
        <div class="espaco-radio col-md-3 col-xs-12">
            <div class="input-group">
                <span class="meu-grupo-addon input-group-addon">
                    <input type="radio" aria-label="televisao selecionar" name="produto" valor="fogao"> Fogão
                </span>
            </div>
        </div>
        <div class="espaco-radio col-md-3 col-xs-12">
            <div class="input-group">
                <span class="meu-grupo-addon input-group-addon">
                    <input type="radio" aria-label="televisao selecionar" name="produto" valor="microondas"> Microondas
                </span>
            </div>
        </div>
    </div>
    <div class="input-group meu-input-group">
        <span class="input-group-addon" id="quantidade-item">Quantidade item</span>
        <input name="qtd-produto" value="1" type="number" class="form-control" placeholder="Insira a quantidade do item selecionado" aria-describedby="quantidade-item">
    </div>
    <button type="submit" value="enviar" class="btn btn-default">Enviar Dados</button>
</form>

</div>

<?php include("template/footer.php"); ?>
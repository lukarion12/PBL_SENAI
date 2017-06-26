<?php
$lista_items_ativo = true;
include("template/header.php");
?>

<div class="container menu-espaco">

    <h1> Listagem dos Items </h1>
    
    <div class="row">
        <div class="col-lg-12 col-xs-12 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Cliente</th>
                        <th>Descrição Produto</th>
                        <th>Endereço</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <?php
                    include("item.php");
                
                    $banco_de_dados = unserialize(file_get_contents("banco_de_dados.db"));
                    $quantidade_itens = count($banco_de_dados);
                    for($i=0;$i<$quantidade_itens; $i++){
                        echo "<tr>
                            <th scope=\"row\">". $i ."</th>
                            <td>". $banco_de_dados[$i]->nome_cliente ."</td>
                            <td>". $banco_de_dados[$i]->descricao_produto ."</td>
                            <td>". $banco_de_dados[$i]->endereco_cliente ."</td>
                            <td>". $banco_de_dados[$i]->produto ."</td>
                            <td>". $banco_de_dados[$i]->qtd_produto ."</td>
                        </tr>";
                    }
                
                ?>
                
            </table>
        </div>
    </div>

    <a href="deletar_tudo.php" class="btn btn-danger"> Deletar todos os itens </a>
</div>

<?php include("template/footer.php"); ?>
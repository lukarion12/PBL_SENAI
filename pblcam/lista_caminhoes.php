<?php
$lista_caminhoes_ativo = true;
include("template/header.php");
?>

<div class="container menu-espaco">

    <h1> Listagem dos Caminhões e Entregas </h1>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Caminhão</th>
            </tr>
        </thead>
        <?php
            include("item.php");
        
            $banco_de_dados = unserialize(file_get_contents("banco_de_dados.db"));
            $quantidade_itens = count($banco_de_dados);
            /*
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
            */
        ?>
        
    </table>

    <a href="deletar_tudo.php" class="btn btn-danger"> Deletar todos os itens </a>
</div>

<?php include("template/footer.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <META charset="utf8" />
    <!--<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css" />
    <title>Flash Entregas</title>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Flash Entregas</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(isset($inicio_ativo)) { echo "class=\"active\""; } ?>><a href="index.php"> Início </a></li>
                <li <?php if(isset($adiciona_ativo)) { echo "class=\"active\""; } ?>><a href="adicionar_item.php"> Adicionar Item </a></li>
                <li <?php if(isset($lista_items_ativo)) { echo "class=\"active\""; } ?>><a href="lista_items.php"> Listar Itens </a></li>
                <li <?php if(isset($lista_caminhoes_ativo)) { echo "class=\"active\""; } ?>><a href="lista_caminhoes.php"> Listar Caminhões </a></li>
                <!--<li><a href="#about">About</a></li>-->
                <!--<li><a href="#contact">Contact</a></li>-->
                <!-- ADICIONE OS LINKS AQUI! -->
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Nao mexer nas linhas acima -->
    
    <title>Flash Entregas</title>
    
    <!-- BootStrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Estilo da página -->
    <link rel="stylesheet" href="styles/style.css" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
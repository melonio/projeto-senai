<html lang="pt-BR">
<head>
    <!--Conteudo usando caracteres UTF8-->
    <meta charset="UTF-8">
    <!--É a primeira configuração que adaptarão site para o tamanho de tela do dispositivo
    que está acessando o site-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Adiciona compatibilidade com navegadores antigos-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="icone.png" />
    <?php
        $titulo = "CORPOFIT";
        global $tituloPagina;
        
        if ($tituloPagina == $tituloPagina . '') {
            $titulo = $titulo . ' | ' . $tituloPagina;
        }

    ?>
    <title><?php echo $titulo ?></title>
    <!-- CSS AQUI-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header class="cabecalho">
        <div class="container"> <!--Inicio container 1-->
            <a href="index.php"><h1 id="logo" class="logo">Design Responsivo(LOGOMARCA)</h1></a>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/Fechar Menu</button> <!--Servira para abrir o Menu de Navegacao-->
                <ul class="menu-principal__lista">
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Home'? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre'? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portifolio'? 'menu-principal__item--atual' : '' ?>" href="portifolio.php">Portifolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato'? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div> <!--FIM CONTAINER 1-->
    </header>
    <main> <!--Conteudo principal-->
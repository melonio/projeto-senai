
<?php 
    global $tituloPagina;
    $tituloPagina = "Portifolio";
    include "cabecalho.php" 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portifolio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Minus, nam? Recusandae, omnis qui esse libero nisi laudantium 
                fuga ratione, sint, incidunt mollitia nostrum commodi similique
                harum ullam pariatur minus dolorum!
            </p>
        </section>
        <nav>
            <ul class="lista-trabalho">
                <!-- IMAGEM 1 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                        <img src="img2/portfolio/miniaturas/port1.jpg" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Avião</h2>
                    </a>
                </li>
                <!-- IMAGEM 2 -->
                <li class="lista-trabalho__item" >
                    <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                    <img src="img2/portfolio/miniaturas/port2.jpg" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Roda dentada</h2>
                    </a>
                </li>
                <!-- IMAGEM 3 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                        <img src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Cidade noturna</h2>
                    </a>
                </li>
                <!-- IMAGEM 4 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                        <img src="img2/portfolio/miniaturas/port4.jpg" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Paisagem</h2>
                    </a>
                </li>
                <!-- IMAGEM 5 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                    <img src="img2/portfolio/miniaturas/port5.jpg" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Banco de Bicicleta</h2>
                    </a>
                </li>
                <!-- IMAGEM 6 -->
                <li  class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                        <img src="img2/portfolio/miniaturas/port6.jpg" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Vilarejo</h2>
                    </a>
                </li>
            </ul>
        </nav>
<?php include "rodape.php" ?>
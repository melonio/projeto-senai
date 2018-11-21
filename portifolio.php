
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
            Logo, nossa ideia é disponibilizar serviços e equipamentos a um preço justo, <br/>
            com ótimos equipamentos e salas limpas.<br/>
            Estamos em constante processo de melhoramento <br/> na busca pela melhor experiência de nossos clientes.
            </p>
        </section>
        <nav>
            <ul class="lista-trabalho">
                <!-- IMAGEM 1 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img2/portfolio/port1.jpeg">
                        <img src="img2/portfolio/miniaturas/port1.jpg" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Henrique Freitas, 34 anos</h2>
                    </a>
                </li>
                <!-- IMAGEM 2 -->
                <li class="lista-trabalho__item" >
                    <a data-fancybox="gallery" href="img2/portfolio/port2.jpg">
                    <img src="img2/portfolio/miniaturas/port2.png" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Fredrich Snowden</h2>
                    </a>
                </li>
                <!-- IMAGEM 3 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img2/portfolio/port3.jpg">
                        <img src="img2/portfolio/miniaturas/port3.png" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Ana Farias, 21 anos</h2>
                    </a>
                </li>
                <!-- IMAGEM 4 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img2/portfolio/port4.jpg">
                        <img src="img2/portfolio/miniaturas/port4.jpg" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Casal Almeida Frankfurt</h2>
                    </a>
                </li>
                <!-- IMAGEM 5 -->
                <li class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img2/portfolio/port5.jpg">
                    <img src="img2/portfolio/miniaturas/port5.jpg" class="lista-trabalho__img"alt="">
                        <h2 class="lista-trabalho__titulo">Everton Nogueira, 28 anos</h2>
                    </a>
                </li>
                <!-- IMAGEM 6 -->
                <li  class="lista-trabalho__item">
                    <a data-fancybox="gallery" href="img2/portfolio/port6.jpg">
                        <img src="img2/portfolio/miniaturas/port6.png" class="lista-trabalho__img" alt="">
                        <h2 class="lista-trabalho__titulo">Roberto Fontoura</h2>
                    </a>
                </li>
            </ul>
        </nav>
<?php include "rodape.php" ?>
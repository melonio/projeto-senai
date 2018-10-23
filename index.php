<?php 
    global $tituloPagina;
    $tituloPagina = "Home";
    include "cabecalho.php"; 
?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto grande!</h2>
            <p class="cabecalho-home__lista">Texto menor</p>
            <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
        </header>
        <section id="servicos" class="servicos"><!--Inicio sessao servicos-->
            <div class="container"><!--Inicio CONTAINER 2-->
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item"> <!--Sessao Desenvolvimento Web-->
                    <img src="img/icone-desenvolvimento-web.png" alt="">
                    <h2>Desenvolvimento Web</h2>
                    <p class="servicos__texto">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Excepturi provident ab quasi optio. Itaque, quis. Iure eius ex temporibus 
                        repellat perspiciatis aspernatur nisi animi placeat, quis accusamus impedit 
                        at error.
                    </p>
                </section> <!--Fim Sessao desenvolvimento web-->
                <section class="servicos__item"> <!--Sessao E-commerce-->
                    <img src="img/icone-carrinho-compras.png" alt="">
                    <h2>E-Commerce</h2>
                    <p class="servicos__texto">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Excepturi provident ab quasi optio. Itaque, quis. Iure eius ex temporibus 
                        repellat perspiciatis aspernatur nisi animi placeat, quis accusamus impedit 
                        at error.
                    </p>
                </section> <!--Fim Sessao E-Commerce -->
                <section class="servicos__item"> <!--Sessao Café-->
                    <img src="img/icone-cafe.png" alt="">
                    <h2>Café</h2>
                    <p class="servicos__texto">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Perferendis explicabo voluptatum hic non architecto itaque, 
                        voluptate asperiores et quod, iure sint corrupti cumque quibusdam 
                        maiores omnis animi odio nemo molestiae?
                    </p>
                </section><!--Fim sessao Café-->
            </div><!--FIM CONTAINER 2-->
        </section> <!--Fim sessao servicos--> 
        <section class="depoimento"><!--Sessao depoimentos-->
            <div class="container"> <!--INICIO CONTAINER 3-->
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                <div class="depoimento__caixa">
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img/depoimentos/pessoa-1.jpg" alt="">
                        <p class="depoimento__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit incidunt odio sint necessitatibus architecto"</p>
                        <p class="depoimento__pessoa">Nome da Pessoa</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img/depoimentos/pessoa-1.jpg" alt="">
                        <p class="depoimento__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit incidunt odio sint necessitatibus architecto"</p>
                        <p class="depoimento__pessoa">Nome da Pessoa</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img/depoimentos/pessoa-1.jpg" alt="">
                        <p class="depoimento__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit incidunt odio sint necessitatibus architecto"</p>
                        <p class="depoimento__pessoa">Nome da Pessoa</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    
                </div>
            </div> <!-- FIM CONTAINER 3-->
        </section> <!--Fim sessao depoimentos-->
<?php include "rodape.php" ?>
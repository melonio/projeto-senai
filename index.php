<?php 
    global $tituloPagina;
    $tituloPagina = "Home";
    include "cabecalho.php"; 
?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo animated jello delay-2s">Viva a vida com a intensidade que ela merece!</h2>
            <p style="display: none;" class="cabecalho-home__lista">Texto menor</p>
            <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
        </header>
        <section id="servicos" class="servicos"><!--Inicio sessao servicos-->
            <div class="container"><!--Inicio CONTAINER 2-->
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item"> <!--Sessao Desenvolvimento Web-->
                    <img src="img2/icon-food.png" alt="">
                    <h2>Dieta Personalizada</h2>
                    <p class="servicos__texto">
                    A dieta de emagrecimento personalizada é um regime alimentar calibrado para as exigências e características individuais.
                </section> <!--Fim Sessao desenvolvimento web-->
                <section class="servicos__item"> <!--Sessao E-commerce-->
                    <img src="img2/icon-climb.png" alt="">
                    <h2>Instrutores profissionais</h2>
                    <p class="servicos__texto">
                    Os instrutores são os profissionais responsáveis por atuar na transmissão do conteúdo teórico e prático do programa de um treinamento, por isso, esta função é muito valorizada pelo mercado, pois um bom instrutor faz muita diferença no sucesso do treinamento.
                    </p>
                </section> <!--Fim Sessao E-Commerce -->
                <section class="servicos__item"> <!--Sessao Café-->
                    <img src="img2/icon-climb-2.png" alt="">
                    <h2>Imersão Fitness</h2>
                    <p class="servicos__texto">
                    Faremos ficar totalmente imerso em uma rotina que auxilie o seu desenvolvimento dentro do nosso programa de treinamento, de modo aprimorar sua qualidade de vida não somente com treinamento mas também de forma rotineira.
                    </p>
                </section><!--Fim sessao Café-->
            </div><!--FIM CONTAINER 2-->
        </section> <!--Fim sessao servicos--> 
        <section class="depoimento"><!--Sessao depoimentos-->
            <div class="container"> <!--INICIO CONTAINER 3-->
                <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
                <div class="depoimento__caixa">
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img2/julina-photo.jpg" alt="">
                        <p class="depoimento__texto">A corpofit mudou totalmente minha vida, antes eu era uma pessoa estressada, e que tinha disturbio de temperamento além de seguir uma dieta horrível, hoje tenho mais saúde e energia.</p>
                        <p class="depoimento__pessoa">Juliana Sheines - Colaboradora</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img2/roger-photo.jpeg" alt="">
                        <p class="depoimento__texto">Gostaria de parabenizar toda a equipe da corpofit. O atendimento foi impecável. Tudo muito organizado e com certeza superaram minhas expectativas. Já indiquei a Personal Jéssica para outras pessoas e vou continuar indicando".</p>
                        <p class="depoimento__pessoa">Philipe Hoffman</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    <section class="depoimento__item">
                        <img class="depoimento__img" src="img2/samantta-photo.jpeg" alt="">
                        <p class="depoimento__texto">Fiquei encantada com o profissionalismo desta academia, principalmente no que se refere a motivação. Personais atenciosos e competentes. Parabéns</p>
                        <p class="depoimento__pessoa">Sarah Hikelme</p>
                    </section> <!--Fim sessao conteudo depoimento-->
                    
                </div>
            </div> <!-- FIM CONTAINER 3-->
        </section> <!--Fim sessao depoimentos-->
<?php include "rodape.php" ?>
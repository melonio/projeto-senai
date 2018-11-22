<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include "cabecalho.php";
    
    $nome = '';
    $email ='';
    $mensagem = '';
    $erroFormulario = '';
    $sucesso ='';

    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email =$_POST['email'];
        $mensagem = $_POST['mensagem'];
        if($nome != '' && $email != '' && $mensagem != ''){
            //execucao correta
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail .= 'E-mail: ' . $email . ' - ';
            $mensagemEmail .= 'Mensagem: ' . $mensagem;
            if (mail('renatomariner@gmail.com', 'Mensagem do Contato', $mensagemEmail)) {
                //email enviado
                $sucesso = "Mensagem enviado com sucesso!";
            }else {
                $erroFormulario = "Falha ao enviar email. Tente mais tarde ou através do e-mail yyy@yyyy.com";
            }

        }else {
            //Mensagem de erro
            $erroFormulario = "Por favor verifique os campos.";
        }
    }
?>
       <header class="pagina-cabecalho">
           <h1 class="pagina-cabecalho__titulo">Contato</h1>
       </header>
       <section class="container pagina-conteudo">
           <p class="text-center">Fique à vontade pra enviar suas dúvidas, reclamações, sugestões e elogios. <br/>
           Ficaremos muito felizes em recebê-lo!</p>
           <form action="#" class="formulario" method="POST">

            <?php if($erroFormulario != ''): ?>
                <div class="formulario__erro">
                    <?php echo $erroFormulario?>
                </div>
            <?php endif;?>    
            <?php if($sucesso != ''): ?>
                <div class="formulario__sucesso">
                    <?php echo $sucesso?>
                </div>
            <?php endif;?>  

                <div class="formulario__grupo formulario__grupo--col-esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" type="text" name="nome" id="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--col-dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" type="text" name="email" id="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input class="formulario__botao" type="submit" value="Enviar" name="submit">
           </form>
           <p class="text-center">
               Visite-nos, temos mais de 50 acadêmias especializadas em todo o Brasil.
           </p>
           <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51862.55228089609!2d139.6576064189874!3d35.66691721267005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2zU2hpYnV5YSwgVMOzcXVpbywgSmFww6Nv!5e0!3m2!1spt-BR!2sbr!4v1534186589810" width="100%" height="450" frameborder="450" style="border:0" allowfullscreen></iframe>
           </div>
       </section> 
<?php include "rodape.php" ?>
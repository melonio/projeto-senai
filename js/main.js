/////////////////////JavaScript Puro///////////
// let botao = document.querySelector(".menu-principal__btn");
// let menuPrincipal = document.querySelector(".menu-principal");

// botao.addEventListener('click', abreFechaMenu);

// function abreFechaMenu(evento){
//     menuPrincipal.classList.toggle('menu-principal--fechado');
// }
// function validar(frm){
//     // Atribui os valores dos campos do formulario
//     // para as variaveis
//     let nome = frm.nome.value.toString();
//     let email = frm.email.value.toString();
//     let mensagem = frm.mensagem.value.toString();
//     //Verificações: Se conteudo for vazio ou nulo ou menor que 3
//     if( nome == "" || nome == null || nome.length < 3){
//         alert("Por favor insira um nome válido!");
//         frm.nome.focus();
//         return false;
//     }
//     if( email == "" || 
//         email == null ||
//         email.indexOf('@') == -1 ||
//         email.indexOf('.') == -1)
//     {
//         alert("Por favor insira um e-mail válido!");
//         frm.email.focus();
//         return false;
//     }
//     if( mensagem == "" || 
//         mensagem == null || 
//         mensagem.length < 10){
//         alert("Por favor digite uma mensagem válida!");
//         frm.mensagem.focus();
//         return false;
//     }
// }

//Jquery//
//Carrega instruções apenas quando todo o documento estiver carregado
$(document).ready(function(){
    //Manipula o botao menu principal para executar o Abrir e Fechar
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });
    //Pluggin para executar o carrossel de depoimentos no index.html
    $('.depoimento__caixa').slick({
        autoplay: true,
        arrows: true,
        dots: true
    });
    //Pluggin para validação de formulário
    $('.formulario').validate({
        rules:{
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            nome: "Por favor preencha este campo!",
            email:{
                required: "Por favor preencha este campo!",
                email: "Por favor digite um e-mail válido!"
            },
            mensagem: {
                required: "Por favor preencha este campo!",
                minlength: "Por favor escreva mais de 10 caracteres"
            }
        }
    });
    //cor do menu selecionado
    $(".menu-principal__item--atual").css("color", "#f00");

    //animação da logo
    $("#logo").on("mouseover", function(){
        $(this).addClass("animated tada");
    })
    $("#logo").on("mouseout", function(){
        $(this).removeClass("animated tada");
    })

    //animação do mouse
    $(".cabecalho-home__role").on("mouseover", function(){
        $(this).addClass("animated bounce")
    });
    $(".cabecalho-home__role").on("mouseout", function(){
        $(this).removeClass("animated bounce")
    });
});

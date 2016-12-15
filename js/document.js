$(document).ready(function () {
    
    // Pega a última parte da URL e corta o primeiro caracter, o método abaixo é sensitive case, 
    // uma vez que for EXATAMENTE IGUAL não é necessário fazê-lo 
    var newpage = ((window.location.href.match(/([^\/]*)\/?$/)[1]).substring(0)); 
    var page = newpage.split('.html').join("");
    // Trabalha caso houver exceções
    if (newpage === 'someNonMatchingURL') {  //deal with an exception literally
        newpage = 'matchingNavbarText';
    }
    // Verifica a página
    switch (page) {
        case 'index':
            caminho = 'menu.html #index';
            break;
        default :
            caminho = '../menu.html #pages';
            break;
    }
    // Antes executa o script da linha 22, depois carrega o menu
    $('#menu-top').load(caminho, function (){
        $(".button-collapse").sideNav();
    });

    $('.slider').slider({
        full_width: true,
        interval: 4000
    });
    $('.parallax').parallax();

    // executa a modal 
    $('.modal-trigger').leanModal();


});

$(document).ready(function() {

    // Evento Hamburguer Menu
    const showMenu = (hamburguerId,navId) =>{
        const hamburger = document.getElementById(hamburguerId),
            nav = document.getElementById(navId);

        if(hamburger && nav){
            hamburger.addEventListener('click', () =>{
                hamburger.classList.toggle("is-active");
                nav.classList.toggle('show');
            })
        }
    }

    showMenu('hamburger','main-nav');


    //Wow.js se complementa con animate.css
    let wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 150, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();


    //Evento para desplazamiento

    $('.ancla').click(function(evento) {
        //Anulamos la funcionalidad por defecto del evento
        evento.preventDefault();
        //Creamos el string del enlace ancla
        var codigo = "#" + $(this).data("ancla");
        //Funcionalidad de scroll lento para el enlace ancla en 3 segundos
        $("html,body").animate(
            {
                scrollTop: ($(codigo).offset().top) - top_fixed
            }, 700);
    });

    let top_fixed = 88; //88 sale del fixed top

    //Evento para el resaltado del href al hacer scrool
    $(window).scroll(function(){

        let actual_top_body = $('html').scrollTop();
        inicializarScrollTop(actual_top_body);

    });

    //Evento para el resaltado del href al cargar pagina
    let actual_top_body_iniciado = $('html').scrollTop();
    inicializarScrollTop(actual_top_body_iniciado);

    function inicializarScrollTop(actual_top_body){

        if((typeof $('#somos').offset()) !== 'undefined'){


            $('.ancla-alone').removeClass('active');

            var top_politica = $('#somos').offset().top;
            var top_sociedad = $('#servicios').offset().top;

            if((actual_top_body + (top_fixed - 1)) >= top_politica){
                $('.ancla').removeClass('active');
                let elementoPolitica = $('.estatico a[data-ancla="somos"]')[0];
                let politica = $(elementoPolitica)[0];
                $(politica).addClass('active')
            }

            if((actual_top_body + top_fixed) >= top_sociedad){
                $('.ancla').removeClass('active');
                let elementoSociedad = $('.estatico a[data-ancla="servicios"]')[0];
                let sociedad = $(elementoSociedad)[0];
                $(sociedad).addClass('active')
            }

        }else{
            $('.ancla').removeClass('active');
            $('.ancla-alone').addClass('active');
        }

    }


    //Banner
    $('.banner-carrusel').slick({
        // arrows: false,
        prevArrow: $('#btn-banner-prev'),
        nextArrow: $('#btn-banner-next'),
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
    });

});

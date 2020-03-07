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

            //$('.ancla-alone').removeClass('active');

            var top_home = $('#home').offset().top;
            var top_somos = $('#somos').offset().top;
            var top_nuestros = $('#nuestros').offset().top;
            var top_servicios = $('#servicios').offset().top;
            var top_prueba = $('#prueba').offset().top;
            var top_encuentra = $('#encuentra').offset().top;

            if((actual_top_body + (top_fixed - 1)) >= top_home){
                $('.ancla').removeClass('active');
                $('.header a[data-ancla="home"]').eq(0).addClass('active');
            }

            if((actual_top_body + (top_fixed - 1)) >= top_somos){
                $('.ancla').removeClass('active');
                $('.main-nav a[data-ancla="somos"]').eq(0).addClass('active');
            }

            if((actual_top_body + top_fixed) >= top_nuestros){
                $('.ancla').removeClass('active');
                $('.main-nav a[data-ancla="nuestros"]').eq(0).addClass('active');
            }

            if((actual_top_body + top_fixed) >= top_prueba){
                $('.ancla').removeClass('active');
                $('.main-nav a[data-ancla="prueba"]').eq(0).addClass('active');
            }

            if((actual_top_body + top_fixed) >= top_servicios){
                $('.ancla').removeClass('active');
                $('.main-nav a[data-ancla="servicios"]').eq(0).addClass('active');
            }

            if((actual_top_body + top_fixed) >= top_encuentra){
                $('.ancla').removeClass('active');
                $('.main-nav a[data-ancla="encuentra"]').eq(0).addClass('active');
            }

        }else{
            $('.ancla').removeClass('active');
            //$('.ancla-alone').addClass('active');
        }

    }

    showMenu('hamburger','main-nav');


    // carrusel home
    $('.home__geeks-content').slick({
        // centerMode: true,
        centerMode: true,
        infinite: true,
        centerPadding: '10px',
        slidesToShow: 3,
        prevArrow: $('#btn-prev'),
        nextArrow: $('#btn-next'),
        mobileFirst: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 320,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    swipeToSlide: false,
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    swipeToSlide: false,
                }
            },
        ]
    });



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

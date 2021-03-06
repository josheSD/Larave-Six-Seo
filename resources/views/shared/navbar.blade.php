<div class="cabecera-scroll"></div>

<div class="header">
    <div class="esquema">
        <div class="navbar">
            <div class="navbar__logo">
                <a href="{{ url('/') }}" class="ancla" data-ancla="home">
                    <img src="{{ asset('img/logo.svg') }}" class="navbar__logo-hero" alt="Logo">
                </a>
            </div>
            <div class="navbar__menu">
                <!-- smartphone -->
                <div class="hamburger hamburger--slider" id="hamburger">
                    <span class="hamburger__box">
                        <span class="hamburger__inner"></span>
                    </span>
                </div>

                <!-- table +++ -->
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <div id="is_home"></div>
                        <li class="menu__item"><a class="menu__item-link ancla scrolling" href="{{ url('/') }}"  data-ancla="somos">¿Quiénes somos?</a></li>
                        <li class="menu__item"><a class="menu__item-link ancla scrolling" href="{{ url('/') }}"  data-ancla="nuestros">Nuestros geeks</a></li>
                        <li class="menu__item"><a class="menu__item-link ancla scrolling" href="{{ url('/') }}"  data-ancla="servicios">Servicios</a></li>
                        <li class="menu__item"><a class="menu__item-link ancla scrolling" href="{{ url('/') }}"  data-ancla="prueba">Haz la prueba</a></li>
                        <li class="menu__item"><a class="menu__item-link ancla scrolling" href="{{ url('/geek') }}"  data-ancla="encuentra">Encuentra tu geek</a></li>
                    </ul>
                </nav>



            </div>
        </div>
    </div>
</div>

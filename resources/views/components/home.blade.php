@extends('index')

@section('content')

    <div class="l-home ancla" id="home">
        <div class="banner">
            <div class="banner-carrusel">
                <!-- slider -->
                <div class="banner">
                    <div class="esquema">
                        <div class="wrap-slider">
                            <div class="wrap-slider__text">
                                 <div>
                                     <h1>¿Problemas con tu computadora?</h1>
                                 </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                                </div>
                                <div class="button">
                                    <a href="#"><span>Soluciónalo Ya!</span></a>
                                </div>
                            </div>
                            <div class="wrap-slider__hero">
                                <img src="{{ asset('img/img-banner.png') }}"  alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider -->
                <div class="banner">
                    <div class="esquema">
                        <div class="wrap-slider">
                            <div class="wrap-slider__text">
                                <div>
                                    <h1>Deja que nuestros expertos se encargen </h1>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                                </div>
                                <div class="button">
                                    <a href="#"><span>Soluciónalo Ya!</span></a>
                                </div>
                            </div>
                            <div class="wrap-slider__hero">
                                <img src="{{ asset('img/slide-2.png') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider -->
                <div class="banner">
                    <div class="esquema">
                        <div class="wrap-slider">
                            <div class="wrap-slider__text">
                                <div>
                                    <h1>¿Problema con tu computadora? </h1>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                                </div>
                                <div class="button">
                                    <a href="#"><span>Soluciónalo Ya!</span></a>
                                </div>
                            </div>
                            <div class="wrap-slider__hero">
                                <img src="{{ asset('img/slide-3.png') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <section class="quienes-somos" id="somos">
                <div class="esquema">
                    <div class="wrap-somos">
                        <div class="wrap-somos__hero">
                            <img src="{{ asset('img/img-que-es.svg') }}" alt="">
                        </div>
                        <div class="wrap-somos__text">
                            <div>
                                <h1>¿Problema con tu computadora? </h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                            </div>
                            <div class="button">
                                <a href="#"><span>Soluciónalo Ya!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="nuestros geeks" id="nuestros">
                <div class="esquema">
                    <div class="wrap-somos">
                        <div class="wrap-somos__hero">
                            <img src="{{ asset('img/img-que-es.svg') }}" alt="">
                        </div>
                        <div class="wrap-somos__text">
                            <div>
                                <h1>NUESTROS</h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                            </div>
                            <div class="button">
                                <a href="#"><span>Soluciónalo Ya!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="servicios" id="servicios">
                <div class="esquema">
                    <div class="wrap-somos">
                        <div class="wrap-somos__hero">
                            <img src="{{ asset('img/img-que-es.svg') }}" alt="">
                        </div>
                        <div class="wrap-somos__text">
                            <div>
                                <h1>SERVICIOS</h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                            </div>
                            <div class="button">
                                <a href="#"><span>Soluciónalo Ya!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="prueba" id="prueba">
                <div class="esquema">
                    <div class="wrap-somos">
                        <div class="wrap-somos__hero">
                            <img src="{{ asset('img/img-que-es.svg') }}" alt="">
                        </div>
                        <div class="wrap-somos__text">
                            <div>
                                <h1>SOMOS</h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                            </div>
                            <div class="button">
                                <a href="#"><span>Soluciónalo Ya!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seccion" id="encuentra">
                <div class="esquema">
                    <div class="wrap-somos">
                        <div class="wrap-somos__hero">
                            <img src="{{ asset('img/img-que-es.svg') }}" alt="">
                        </div>
                        <div class="wrap-somos__text">
                            <div>
                                <h1>ENCUENTRA</h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, dolore ea nostrum quos rem reprehenderit totam? Odit, velit voluptatem!</p>
                            </div>
                            <div class="button">
                                <a href="#"><span>Soluciónalo Ya!</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>


@endsection

@extends('index')

@section('content')

    <div class="l-home">
        <div class="banner">
            <div class="banner-carrusel">
                <!-- slider -->
                <div class="banner">
                    <div class="esquema">
                        <div class="wrap-slider">
                            <div class="wrap-slider__text">
                                 <p>Texto</p>
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
                                <p>Texto</p>
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
                                <p>Texto</p>
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
            <section class="seccion" id="quienes-somos">
                  
            </section>
            <section class="seccion" id="nuestros-geeks">

            </section>
            <section class="seccion" id="servicios">

            </section>
            <section class="seccion" id="prueba">

            </section>
            <section class="seccion" id="blog">

            </section>
            <section class="seccion" id="encuentra-geek">

            </section>
        </main>
    </div>


@endsection

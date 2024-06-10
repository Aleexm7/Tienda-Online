<!--  Con este extend estamos llamando a las etiquetas head y footer. -->
@extends('layouts.general')

@section('welcome')

<main>
    <div class="d-flex justify-content-center">
        <video autoplay muted loop class="w-100">
            <source src="assets/img/slider/video1.mp4" type="video/mp4">
        </video>
    </div>

     <!-- Sección de Mejores Estilos Valorados -->
     <div class="container mt-4">
        <section class="bg-light p-4 w-100">
            <div class="d-flex justify-content-center align-items-center mb-3">
                <h2 class="title-style-home">Los Mejores Estilos Valorados</h2>
                
            </div>

            <div class="row">
                <!-- Estilo 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/mejores-estilos1.webp" class="card-img-top" alt="mejores-estilos-1">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-2">
                                <!-- Logo pequeño (foto de perfil) -->
                                <img src="/assets/img/logo-estilos1.webp" class="rounded-circle mb-2" width="30" height="30" alt="Logo Pequeño">
                                <span class="ms-2">@anjoalexander</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estilo 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/mejores-estilos2.webp" class="card-img-top" alt="mejores-estilos-1">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-2">
                                <!-- Logo pequeño (foto de perfil) -->
                                <img src="/assets/img/logo-estilos3.webp" class="rounded-circle mb-2" width="30" height="30" alt="Logo Pequeño">
                                <span class="ms-2">@anjoalexander</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estilo 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/mejores-estilos3.webp" class="card-img-top" alt="mejores-estilos-1">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-2">
                                <!-- Logo pequeño (foto de perfil) -->
                                <img src="/assets/img/logo-estilos2.webp" class="rounded-circle mb-2" width="30" height="30" alt="Logo Pequeño">
                                <span class="ms-2">@anjoalexander</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="text-center mt-4 mb-4 item" id="changingText">
            <p><strong>"THE FASTEST GROWING STREETWEAR BRAND IN SPAIN"</strong></p>
        </div>
    </div>

    <section class="mt-4">
        <article>
            <div>
                <img src="/assets/img/banner_1.webp" alt="fondo 1" class="w-100">
            </div>
        </article>
        <article>
            <div>
                <img src="/assets/img/banner_2.webp" alt="fondo 2" class="w-100">
            </div>
        </article>
    </section>
</main>


@endsection
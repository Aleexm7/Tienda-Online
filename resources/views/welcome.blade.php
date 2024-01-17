<!--  Con este extend estamos llamando a las etiquetas head y footer. -->
@extends('layouts.general')

@section('welcome')

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-2">
                <!-- Carrusel de imágenes -->
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/carousel-foto-1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/carousel-foto-2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/carousel-foto-3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Nueva Colección -->
    <div class="container mt-4">
        <section>
            <h2>Nueva Colección</h2>
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/nueva-coleccion-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo Producto 1</h5>
                            <p class="card-text">Descripción corta del nuevo producto.</p>
                        </div>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/nueva-coleccion-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo Producto 2</h5>
                            <p class="card-text">Descripción corta del nuevo producto.</p>
                        </div>
                    </div>
                </div>

                <!-- Producto 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/nueva-coleccion-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo Producto 3</h5>
                            <p class="card-text">Descripción corta del nuevo producto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Sección de Mejores Estilos Valorados -->
    <div class="container mt-4">
        <section class="bg-light p-4 w-100 h-100">
        <h2>Los Mejores Estilos Valorados</h2>
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

    <!-- Sección de Ropas en Rebajas -->
    <div class="container mt-4">
        <section>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Ropas en Rebajas</h2>
            <a href="#"> <i class="fas fa-arrow-right"></i></a>
        </div>
            <div class="row">
                <!-- Item 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/ropa-rebajas-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ropa en Rebajas 1</h5>
                            <p class="card-text">Descripción corta del producto.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/ropa-rebajas-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ropa en Rebajas 2</h5>
                            <p class="card-text">Descripción corta del producto.</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/assets/img/ropa-rebajas-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ropa en Rebajas 3</h5>
                            <p class="card-text">Descripción corta del producto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>


@endsection
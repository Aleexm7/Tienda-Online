@extends('layouts.template')

@section('general')

<header>
<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/assets/img/logo.png" width="30" height="30" alt="logo"></a>
        
        <!-- Botón de hamburguesa para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ofertas</a>
                </li>
            </ul>

            <!-- Campo de búsqueda a la derecha -->
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>

            <!-- Iconos a la derecha -->
            <div class="d-flex align-items-center ms-3">
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-user ms-3"></i>
            </div>
        </div>
    </div>
</nav>

</header>

<!-- Aquí meteremos todos los section que sí queramos que tengan navbar y footer -->
@yield('welcome')
<footer>

</footer>

@endsection
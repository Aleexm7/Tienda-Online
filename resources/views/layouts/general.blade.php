@extends('layouts.template')

@section('general')

<nav id="navbar" class="navbar navbar-expand-lg" style="background-color:black">
    <div class="container-fluid">

        <div class="col-3">
            <a class="navbar-brand" id="brand"><img src="/assets/img/logoUrbanStyle.png" width="120" height="60" alt="logo" class="ms-2"></a>
        </div>

        <div class="col-6">
            <!-- Botón de hamburguesa para dispositivos pequeños -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mx-auto" id="navList">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menSection') }}">Hombre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('womanSection') }}">Mujer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-3">
            @if(auth()->check())
            <div class="d-flex justify-content-end">
                <a href="{{ route('ProductosCarrito') }}" class="cart-icon me-4">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-notification" class="position-absolute translate-middle badge rounded-pill bg-danger">
                        {{ auth()->user()->cart->products->sum('pivot.quantity') !== null ? '!' : '0'}}
                    </span>

                </a>
                @if(auth()->user()->hasRole('admin'))
                <a href="{{ route('dashboardadmin') }}" class="dashboard-icon me-4" style="text-decoration: none; color: inherit;">
                    <i class="fas fa-tachometer-alt"></i>
                </a>
                @endif
                <a href="{{ route('logout') }}" class="user-icon me-4"><i class="fas fa-user"></i></a>
            </div>
            @else
            <div class="text-end d-none d-md-block">
                <div class="siteLinkContainer">
                    <a href="{{ route('login') }}" class="blackLink siteLink">Login</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</nav>




<!-- Aquí meteremos todos los section que sí queramos que tengan navbar y footer -->
@yield('welcome')
@yield('menSection')
@yield('menTshirtsBasic')
@yield('menTshirtsCropped')
@yield('menTshirtsGraphic')
@yield('menSudaderas')
@yield('menSudaderaSinCapucha')
@yield('menPantalonesVaqueros')
@yield('menPantalonesBaggy')
@yield('menPantalonesCargo')
@yield('menChaquetas')
@yield('womanSection')
@yield('womanCamisetas')
@yield('womanPantalones')
@yield('womanPantalonesCorto')
@yield('womanVestidos')
@yield('womanVestidosCorto')
@yield('womanZapatos')


<footer class="text-white py-4" style="background-color:black">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="/assets/img/logoUrbanStyle.png" alt="logo" width="120" height="80">
                <div class="mt-3">
                    <a href="mailto:urbanstyle@gmail.com" id="emailLinkFooter">urbanstyle@gmail.com</a>
                </div>

                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="font-weight-bold">We are URBAN</h5>
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <p class="mt-4">Nuestras tiendas</p>
                        </li>
                        <li>
                            <p class="mt-4">Trabaja con nosotros</p>
                        </li>
                        <li>
                            <p class="mt-4">Sobre nosotros</p>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                <h5 class="font-weight-bold title-footer">¡Unete al club!</h5>
                <p>Subcríbase a nostros y recibe un 10% de descuento en su primer pedido.</p>
                <form class="d-flex">
                    <input class="form-control me-2" placeholder="Introduce tu email" type="email">
                    <button class="btn btn-dark" type="submit">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        <div class="pt-4 text-center">
            <p class="mt-4">© 2024 UrbanStyle. All rights reserved.</p>
        </div>
    </div>
</footer>

@endsection
@extends('layouts.template')

@section('general')

<header>
    <nav class="navbar navbar-expand-lg bg-black fixed-top">
        <div class="container">
            <a class="navbar-brand"><img src="/assets/img/logo.png" width="140" height="40" alt="logo"></a>

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
                            <a class="nav-link" href="#">Mujer</a>
                        </li>
                    </ul>
                </div>
                <!-- Campo de búsqueda a la derecha -->
                <form class="d-flex ms-auto mb-2">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>

                <!-- Iconos a la derecha -->
                <div class="d-flex align-items-center ms-3">
                    @if(auth()->user())
                    <a href="{{route('ProductosCarrito')}}"><i class="fas fa-shopping-cart"></i></a>
                    <span class="text-light">{{auth()->user()->name}}</span>
                    <a href="{{ route('logout') }}" class="user-icon"><i class="fas fa-user ms-3"></i></a>
                    @else
                    <a href="{{ route('login') }}" class="user-icon"><i class="fas fa-user ms-3"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

   <!--  <div class="fixed-top mt-5">
        <div class="d-flex justify-content-center mt-2 message-bar py-2">
            <a>ENVÍO GRATIS: NACIONAL MAYOR A 100€ | INTERNACIONAL MAYOR A 200€</a>
        </div>
    </div> -->
</header>



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


<footer class="bg-black text-white mt-4">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="/assets/img/logo.png" width="200" height="50" alt="logo">
                <div class="mt-3">
                    <a href="mailto:urbanstyle@gmail.com" id="emailLinkFooter">urbanstyle@gmail.com</a>
                </div>
                <!-- Iconos de redes sociales -->
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white me-3"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="title-footer">We are URBAN</h5>
                <ul class="list-unstyled">
                    <li class="list-column-2"><a href="#">Nuestras tiendas</a></li>
                    <li class="list-column-2"><a href="#">Trabaja con nosotros</a></li>
                    <li class="list-column-2"><a href="#">Sobre nosotros</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="title-footer">Ayuda</h5>
                <ul class="list-unstyled">
                    <li><a class="text-white" href="#">FaQ</a></li>
                    <li><a class="text-white" href="#">Contacto</a></li>
                    <li><a class="text-white" href="#">Pedido</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="title-footer">¡Unete al club!</h5>
                <div>
                    <p>Subcríbase a nostros y recibe un 10% de descuento en su primer pedido</p>
                </div>
                <form action="" method="post">
                    <input type="email" name="email" id="email" placeholder="Dirección correo electrónico">
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</footer>

@endsection
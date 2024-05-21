@extends('layouts.general')


@section('womanSection')

<!-- banner -->
<div class="d-flex justify-content-center">
    <img src="{{ asset('/assets/img/products/woman/banner.webp')}}" alt="banner" style="width:100%">
</div>

<!-- Products card -->
<div class="container">
    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Camisetas</h3>
            <a href="{{route('womanCamisetas')}}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta1.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta2.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta3.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta4.webp') }}" alt="camiseta beige">
            </div>
        </div>
        
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Pantalones</h3>
            <a href="{{route('womanPantalones')}}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/pantalones/pantalon1.webp') }}" alt="pantalones blanco">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/pantalones/pantalon2.webp') }}" alt="pantalones baggy 2">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/pantalones/pantalonCorto1.webp') }}" alt="pantalones cargo 1">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/pantalones/pantalonCorto2.webp') }}" alt="pantalones cargo 2">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Vestidos</h3>
            <a href="{{ route('womanVestidos') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/vestidos/vestido1.jpg') }}" alt="vestido">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/vestidos/vestido2.jpg') }}" alt="sudadera not a fan grey">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/vestidos/vestidoCorto1.jpg') }}" alt="sudadera beige">
                
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/vestidos/vestidoCorto2.jpg') }}" alt="sudadera gris">
                
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Zapatos</h3>
            <a href="{{ route('womanZapatos') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/zapatos/zapato1.jpg') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/zapatos/zapato2.jpg') }}" alt="sudadera not a fan grey">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/zapatos/zapato3.jpg') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/woman/zapatos/zapato4.jpg') }}" alt="sudadera gris">
            </div>
        </div>
    </div>
</div>

</div>


@endsection
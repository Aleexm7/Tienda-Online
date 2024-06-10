@extends('layouts.general')


@section('menSection')

<!-- banner -->
<div class="d-flex justify-content-center">
    <video class="video-banner-men w-100" autoplay muted loop>
        <source src="assets/img/products/men/video-banner.mp4">
    </video>
</div>

<!-- Products -->
<div class="container">
    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Sudaderas</h3>
            <a href="{{ route('menSudaderas') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera1.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera2.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera3.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera4.webp') }}" alt="sudadera beige">
            </div>
        </div>
        
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Pantalones</h3>
            <a href="{{ route('menPantalones') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesBaggy1.webp') }}" alt="pantalones baggy 1">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesBaggy2.webp') }}" alt="pantalones baggy 2">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesCargo1.webp') }}" alt="pantalones cargo 1">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesCargo2.webp') }}" alt="pantalones cargo 2">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Chaquetas</h3>
            <a href="{{ route('menChaquetas') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas1.webp') }}" alt="sudadera beige">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas2.webp') }}" alt="sudadera not a fan grey">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas3.webp') }}" alt="sudadera beige">
                
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas4.webp') }}" alt="sudadera gris">
                
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Camisetas</h3>
            <a href="{{ route('menTshirtBasic') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas1.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas2.webp') }}" alt="sudadera not a fan grey">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas5.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas6.webp') }}" alt="sudadera gris">
            </div>
        </div>
    </div>
</div>

</div>


@endsection
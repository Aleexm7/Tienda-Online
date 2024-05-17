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
            <a href="#"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta1.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta2.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta3.webp') }}" alt="camiseta beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/woman/camisetas/camiseta4.webp') }}" alt="camiseta beige">
            </div>
        </div>
        
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Pantalones</h3>
            <a href="#"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesBaggy1.webp') }}" alt="pantalones baggy 1">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesBaggy2.webp') }}" alt="pantalones baggy 2">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalonesCargo1.webp') }}" alt="pantalones cargo 1">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
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
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas1.webp') }}" alt="sudadera beige">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas2.webp') }}" alt="sudadera not a fan grey">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas3.webp') }}" alt="sudadera beige">
                
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2">
            <div class="card">
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
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas1.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas2.webp') }}" alt="sudadera not a fan grey">
               
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas5.webp') }}" alt="sudadera beige">
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0 mt-2 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas6.webp') }}" alt="sudadera gris">
            </div>
        </div>
    </div>
</div>

</div>


@endsection
@extends('layouts.general')

@section('menTshirts')
<div class="container">
    <div class="d-flex flex-row mt-2">
        <span class="p-2 ms-2"><a href="{{ route('AllTshirt') }}" class="nav-link-list active">Todo</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtBasic')}}" class="nav-link-list">Básicas</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtCropped')}}" class="nav-link-list">Cropped</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtGraphic')}}" class="nav-link-list">Estampadas</a></span>
    </div>
    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas1.webp') }}" alt="CAMISETA AZUL VIRGINITY">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL VIRGINITY</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">79€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas2.webp') }}" alt="CAMISETA VERDE LOCALLY HATED">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA VERDE LOCALLY HATED</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">79€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas5.webp') }}" alt="CAMISETA ASH CROPPED">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA ASH CROPPED FIRST CLASS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">79€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas6.webp') }}" alt="CAMISETA NEGRA SHERRY">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA NEGRA SHERRY</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">79€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas9.webp') }}" alt="CAMISETA ASH TENNIS">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA ASH TENNIS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas3.webp') }}" alt="CAMISETA VERDE LOCALLY HATED">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL LOCALLY HATED</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped2.webp') }}" alt="CAMISETA LILAC CROPPED BACANO">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA LILAC CROPPED BACANO</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped3.webp') }}" alt="CAMISETA BLANCA CROPPED FIRST CLASS">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA BLANCA FIRST CLASS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas1.webp') }}" alt="CAMISETA VERDE ORIGINS">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA VERDE ORIGINS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas4.webp') }}" alt="CAMISETA BLANCA LOCALLY HATED">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA BLANCA LOCALLY HATED</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">40€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas8.webp') }}" alt="CAMISETA TIRANTES DE PUNTOS ASH">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA TIRANTES DE PUNTOS ASH</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">30€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped4.webp') }}" alt="CAMISETA ASH CROPPED COSTA">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA ASH CROPPED COSTA</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <h5 class="mb-0">79€</h5>
                        <div class="d-flex align-items-center">
                            <div class="mr-2">
                                <select class="form-select form-select-sm">
                                    <option selected disabled>Talla</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <span class="ms-2"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
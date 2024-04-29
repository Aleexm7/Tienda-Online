@extends('layouts.general')

@section('menTshirtsBasic')

<div class="container">
    <div class="d-flex flex-row mt-2">
        <span class="p-2 ms-2"><a href="{{ route('AllTshirt') }}" class="nav-link-list">Todo</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtBasic')}}" class="nav-link-list active">Básicas</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtCropped')}}" class="nav-link-list">Cropped</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtGraphic')}}" class="nav-link-list">Estampadas</a></span>
    </div>
    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas1.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA VERDE ORIGINS</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">39€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas2.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA MARSH ORIGINS</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">39€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas3.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA AZUL MARINO ORIGINS</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">39€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas4.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA ASH ORIGINS</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">39€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas5.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA TIRANTES NEGRA BÁSICA</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">50€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas6.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETAS TIRANTES MILITAR BÁSICAS</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">50€</h5>
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas7.webp') }}" alt="CAMISETA TIRANTES NEGRA BÁSICA X2 NARANJA">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA TIRANTES COLORES BÁSICA</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">50€</h5>
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
        <div class="col-md-3 py-3 py-md-0 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasBasicas8.webp') }}" alt="CAMISETA TIRANTES DE PUNTOS ASH">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA TIRANTES DE PUNTOS ASH</strong></p>

                    <div class="d-flex justify-content-between align-items-center mt-4">
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
    </div>
</div>
@endsection
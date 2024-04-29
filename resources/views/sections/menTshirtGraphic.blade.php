@extends('layouts.general')

@section('menTshirtsGraphic')
<div class="container">
    <div class="d-flex flex-row mt-2">
        <span class="p-2 ms-2"><a href="{{ route('AllTshirt') }}" class="nav-link-list">Todo</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtBasic')}}" class="nav-link-list">Básicas</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtCropped')}}" class="nav-link-list">Cropped</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menTshirtGraphic')}}" class="nav-link-list active">Estampadas</a></span>
    </div>
    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas1.webp') }}" alt="CAMISETA AZUL VIRGINITY">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL VIRGINITY</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas2.webp') }}" alt="CAMISETA VERDE LOCALLY HATED">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA VERDE LOCALLY HATED</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas3.webp') }}" alt="CAMISETA AZUL MARINO LOCALLY HATED">
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
    </div>

    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas13.webp') }}" alt="CAMISETA AZUL MARINO SUMMER TOUR">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL SUMMER TOUR</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas6.webp') }}" alt="CAMISETA NEGRA SHERRY">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA NEGRA CHERRY</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas7.webp') }}" alt="CAMISETA BLANCA SUMMER TOUR">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA BLANCA SUMMER TOUR</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas8.webp') }}" alt="CAMISETA AZUL MARINO RESPECT">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL MARINO RESPECT</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas10.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA AZUL MARINO OLD SPORT</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas11.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA ASH MONTECARLO</strong></p>
                   
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas12.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p><strong class="TitleProduct">CAMISETA MARSH RESPECT</strong></p>
                   
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
</div>

@endsection
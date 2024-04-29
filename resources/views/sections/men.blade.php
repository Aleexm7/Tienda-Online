@extends('layouts.general')


@section('menSection')

<!-- banner -->
<div class="d-flex justify-content-center">
    <video class="video-banner-men w-100" autoplay muted loop>
        <source src="assets/img/products/men/video-banner.mp4">
    </video>
</div>

<!-- Products card -->
<div class="container">
    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Sudaderas</h3>
            <a href="{{ route('menSudaderas') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera1.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>BALEAR CREWNECK OFF-WHITE</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera3.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p><strong>NOT A FAN HOOD GREY MELANGE</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera5.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>OVERDYED CREWNECK GREEN</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera6.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p><strong>BALEAR CREWNECK OFF-WHITE</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Pantalones</h3>
            <i class="fas fa-arrow-right"></i>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalones1.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>PANTALÓN VAQUERO AZUL</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalones2.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p id="text-product"><strong>PANTALÓN VAQUERO WASHED</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalones3.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>PANTALÓN VAQUERO NEGRO</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/pantalones/pantalones4.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p><strong>PANTALÓN VAQUERO RAW</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Chaquetas</h3>
            <i class="fas fa-arrow-right"></i>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas1.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>"LA" BOMBER JACKET</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas2.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p><strong>JEWEL ZIP UP JACKET</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas3.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>CARPENTER JACKET BROWN</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas4.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p><strong>SOFT JACKET BEIGE</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h3>Camisetas</h3>
            <a href="{{ route('AllTshirt') }}"><i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas1.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>CAMISETA AZUL VIRGINITY</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas2.webp') }}" alt="sudadera not a fan grey">
                <div class="card-body">

                    <p><strong>CAMISETA VERDE LOCALLY HATED</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas5.webp') }}" alt="sudadera beige">
                <div class="card-body">

                    <p><strong>CAMISETA ASH CROPPED</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas6.webp') }}" alt="sudadera gris">
                <div class="card-body">

                    <p><strong>CAMISETA NEGRA CHERRY</strong></p>
                    <div class="star">
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                        <i class="fas fa-star checked"></i>
                    </div>
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
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


@endsection
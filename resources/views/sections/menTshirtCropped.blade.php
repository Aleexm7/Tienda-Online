@extends('layouts.general')

@section('menTshirtsCropped')

<div class="container">
    <div class="d-flex flex-row mt-2">
            <span  class="p-2 ms-2"><a  href="{{ route('AllTshirt') }}" class="nav-link-list">Todo</a></span>
            <span  class="p-2 ms-2"><a  href="{{ route('menTshirtBasic')}}" class="nav-link-list">Básicas</a></span>
            <span  class="p-2 ms-2"><a  href="{{ route('menTshirtCropped')}}" class="nav-link-list active">Cropped</a></span>
            <span  class="p-2 ms-2"><a  href="{{ route('menTshirtGraphic')}}" class="nav-link-list">Estampadas</a></span>
    </div>
    <div class="row mt-4">
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped1.webp') }}" alt="CAMISETA BOXY FIT ASH">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA BOXY FIT ASH</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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

                    <p class="TitleProduct"><strong>CAMISETA LILAC CROPPED BACANO</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped3.webp') }}" alt="CAMISETA BLANCA FIRST CLASS">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA BLANCA FIRST CLASS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped4.webp') }}" alt="CAMISETA ASH CROPPED COSTA">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA ASH CROPPED COSTA</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetas5.webp') }}" alt="CAMISETA ASH FIRST CLASS">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA ASH FIRST CLASS</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped5.webp') }}" alt="CAMISETA BLANCA CROPPED BACANO">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA BLANCA CROPPED BACANO</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped6.webp') }}" alt="CAMISETA BLANCA CROPPED COSTA">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA BLANCA CROPPED COSTA</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
                <img src="{{ asset('/assets/img/products/men/camisetas/camisetasCropped7.webp') }}" alt="CAMISETA BOXY FIT AZUL">
                <div class="card-body">

                    <p class="TitleProduct"><strong>CAMISETA BOXY FIT AZUL</strong></p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
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
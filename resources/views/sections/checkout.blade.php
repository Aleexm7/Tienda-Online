@extends('layouts.template')

@section('checkout')
<div class="container d-flex justify-content-center mt-4">
    <div class="bg-info p-4 text-dark bg-opacity-25 rounded-3">
    <h5><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Volver</a></h5>
        <form method="POST" action="{{ route('confirmPayment') }}">
            @csrf
            <div class="row mt-4">
                <div class="col-7">
                    <h4 class="mb-3"><strong>Dirección de facturación</strong></h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Alfredo">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Perez vazquez">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Avenida cruz del campo...">
                    </div>
                    <div class="mb-3">
                        <label for="address2">Dirección alternativa <span class="text-muted">(Opcional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address2">
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="pais">País</label>
                            <input type="text" class="form-control" id="pais" name="pais" placeholder="España">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Madrid">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cp">Código Postal</label>
                            <input type="text" class="form-control" id="cp" name="cp" placeholder="21000">
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">La dirección de envío es la misma que la de facturación</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Guardar esta información para la próxima vez</label>
                    </div>
                    <hr class="mb-4">
                </div>
                <div class="col-5">
                    <div class="card bg-primary text-white rounded-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0">Detalles bancarios</h5>
                            </div>
                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                <input type="text" id="typeName" class="form-control form-control-lg" name="card_name" placeholder="Nombre del titular" />
                                <label class="form-label" for="typeName">Nombre completo</label>
                            </div>
                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                <input type="text" id="typecard" class="form-control form-control-lg" name="card_number" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                <label class="form-label" for="typecard">Número de la tarjeta</label>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div data-mdb-input-init class="form-outline form-white">
                                        <input type="text" id="typeExp" class="form-control form-control-lg" name="card_expiry" placeholder="MM/AAAA" minlength="7" maxlength="7" />
                                        <label class="form-label" for="typeExp">Expiración</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div data-mdb-input-init class="form-outline form-white">
                                        <input type="password" id="cvv" class="form-control form-control-lg" name="card_cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3" />
                                        <label class="form-label" for="cvv">CVV</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Subtotal</p>
                                <p class="mb-2">{{$subtotal}}€</p>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-2">Total (Incl. impuestos)</p>
                                <p class="mb-2">{{$total}}€</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="total" value="{{ $total }}">
            @foreach ($cartProducts as $key => $cartProduct)
            
                <input type="hidden" name="products[{{ $key }}][id]" value="{{ $cartProduct->product_id }}">
                
                <input type="hidden" name="products[{{ $key }}][quantity]" value="{{ $cartProduct->quantity }}">
                <input type="hidden" name="products[{{ $key }}][price]" value="{{ $cartProduct->product_price }}">
            @endforeach
            <button type="submit" class="btn btn-info btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <span>Realizar Pago <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                </div>
                            </button>
        </form>
    </div>
</div>
@endsection
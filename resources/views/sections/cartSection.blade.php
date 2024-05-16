@extends('layouts.template')

@section('cartSection')

<section class="h-100" style="background-color: #eee;">
  @include('alerts.msg')
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-7">


      <div class="card">
        <div class="card-body p-4">
          <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
          <hr>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <p class="mb-1">Shopping cart</p>
              <p class="mb-0">You have {{ count($cartProducts) }} items in your cart</p>
            </div>

          </div>
          <div class="card mb-3">
            @foreach ($cartProducts as $key => $cartProduct)
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <div>
                    <img src="{{$cartProduct->image_path}}" class="img-fluid rounded-3" style="width: 65px;">
                  </div>
                  <div class="ms-3">
                    <h5>{{ $cartProduct->product_name }}</h5>
                    <p class="small mb-0">{{$cartProduct->product_size}}</p>
                  </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                  <div>
                    <h5>{{$cartProduct->product_price}}€</h5>
                  </div>
                  <div class="input-group mx-3">
                    <span class="input-group-text" style="cursor: pointer;" onclick="decreaseQuantity($key)">-</span>

                    <input type="hidden" id="quantity_input_{{ $key }}" name="quantity_{{ $key }}" value="{{ $quantities[$key] ?? 0 }}">

                    @if(isset($quantities[$key]))
                    <p class="mx-2" id="quantity_display_{{ $key }}">{{ $quantities[$key] }}</p>
                    @endif
                    <!-- Icono de "+" -->
                    <span class="input-group-text" style="cursor: pointer;" onclick="increaseQuantity($key)">+</span>
                  </div>
                </div>
                <form id="remove-product-{{ $key }}" action="{{ route('removeFromCart', ['id' => $cartProduct->product_id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="id" value="{{ $cartProduct->product_id }}">
                  <button type="submit" class="btn" style="color: red;">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
              </div>
            </div>
            @endforeach

            <a href="#" class="btn btn-primary btn-lg btn-block">Continue to checkout</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
            <div class="card bg-primary text-white rounded-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Detalles bancario</h5>
                    </div>
                    <p class="small mb-2">Tipo de tarjeta</p>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                    <form class="mt-4">
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                            <label class="form-label" for="typeName">Nombre completo</label>
                        </div>
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typecard" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Número de la tarjeta</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                    <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                    <label class="form-label" for="typeExp">Expiración</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                    <input type="password" id="cvv" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                    <label class="form-label" for="typeText">Cvv</label>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Subtotal</p>
                            <p class="mb-2">{{$subtotal}}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Tax</p>
                            
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-2">Total(Incl. impuestos)</p>
                            
                        </div>
                        <button id="checkoutBtn" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg" onclick="mostrarModalYCerrar()">
                            <div class="d-flex justify-content-between">
                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>


@endsection
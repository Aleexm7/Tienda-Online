@extends('layouts.template')

@section('cartSection')

<section class="min-vh-100" style="background-color: #eee;">
  @include('alerts.msg')
  <div class="container py-5">
    <div class="row">
      <div class="card">
        <div class="p-4">
          <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
          <hr>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <p class="mb-1">Carrito de compra</p>
              <p class="mb-0">Tienes {{ count($cartProducts) }} productos en tu carrito.</p>
            </div>
          </div>
          <form action="{{ route('checkout') }}" method="POST"> <!-- Formulario principal -->
            @csrf
            <div class="card mb-3">
                @foreach ($cartProducts as $key => $cartProduct)
                
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <h5>{{ $cartProduct->product_name }}</h5>
                      <p class="small mb-0">Talla: {{$cartProduct->product_size}}</p>
                    </div>
                    <div class="col-md-5 text-center">
                    
                        <div class="input-group">
                          <h5 class="me-4">Precio: {{ $cartProduct->product_price}}€</h5>
                          <input type="hidden" name="product_id[]" value="{{ $cartProduct->product_id }}">
                          <input type="hidden" name="cart_product_id[]" value="{{ $cartProduct->cart_product_id }}">
                          <input type="hidden" name="product_size_id[]" value="{{ $cartProduct->product_size_id }}">
                          <input type="number" name="quantity[]" value="{{ $cartProduct->quantity }}" class="form-control text-center" min="1">
                        </div>
                    </div>
                  </div>
                </div>
                
                @endforeach
                
                <button type="submit" class="btn btn-primary btn-lg btn-block justify-content-center">Continue to checkout</button> <!-- Botón de enviar del formulario principal -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
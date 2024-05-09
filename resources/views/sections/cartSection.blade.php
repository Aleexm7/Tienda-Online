@extends('layouts.template')

@section('cartSection')

<section class="h-100" style="background-color: #eee;">
  @include('alerts.msg')
  <div class="container py-5">
    <div class="row">
      <div class="card">
        <div class="card-body p-4">
          <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
          <hr>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <p class="mb-1">Shopping cart</p>
              <p class="mb-0">You have {{ count($cartProducts) }} items in your cart</p>
            </div>
            <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
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
                  <a href="#!" style="color: red;"><i class="fas fa-trash-alt ms-2"></i></a>
                </div>
              </div>
              @endforeach
              <a href="{{route('checkout')}}" class="btn btn-primary btn-lg btn-block">Continue to checkout</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>


@endsection
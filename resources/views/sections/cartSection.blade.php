@extends('layouts.template')

@section('cartSection')

<section class="min-vh-100" style="background-color: #eee;">
  @include('alerts.msg')
  <div class="container py-5">
    <div class="row">
      <div class="card">
        <div class="card-body p-4">
          <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
          <hr>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <p class="mb-1">Carrito de compra</p>
              <p class="mb-0">Tienes {{ count($cartProducts) }} productos en tu carrito.</p>
            </div>

          </div>
          <div class="card mb-3">
            @foreach ($cartProducts as $key => $cartProduct)
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h5>{{ $cartProduct->product_name }}</h5>
                  <p class="small mb-0">Talla: {{$cartProduct->product_size}}</p>
                </div>
                <div class="col-md-5 text-center">
                <form action="{{ route('updateCart', ['id' => $cartProduct->product_id]) }}" method="POST">
                    @csrf
                    <div class="input-group" data-key="{{ $key }}">
                      <h5 class="me-4">Precio: {{ $cartProduct->product_price}}€</h5>
                      <input type="number" name="quantity" id="quantity_input_{{ $key }}" value="{{ $cartProduct->quantity }}" class="form-control text-center" min="1" onchange="this.form.submit()">
                    </div>
                  </form>
                </div>
                <div class="col-md-auto">
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
            </div>
            <form action="{{ route('checkout', ['key' => $key]) }}" method="POST">
              @csrf
              <input type="hidden" name="key" value="{{ $key }}">
              <button type="submit" class="btn btn-primary btn-lg btn-block justify-content-center">Continue to checkout</button>
            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function increaseQuantity(element) {
    var key = element.parentElement.getAttribute('data-key');
    var quantityInput = document.getElementById('quantity_input_' + key);
    var quantityDisplay = document.getElementById('quantity_display_' + key);
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    quantityDisplay.textContent = currentQuantity + 1;
}

function decreaseQuantity(element) {
    var key = element.parentElement.getAttribute('data-key');
    var quantityInput = document.getElementById('quantity_input_' + key);
    var quantityDisplay = document.getElementById('quantity_display_' + key);
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        quantityDisplay.textContent = currentQuantity - 1;
    }
}

</script>
@endsection

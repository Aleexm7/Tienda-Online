@extends('layouts.general')

@section('menChaquetas')
<div class="container">
    <div class="d-flex flex-row mt-2">
        <span class="p-2 ms-2"><a href="{{ route('menSection')}}" class="nav-link-list active">Volver</a></span>
    </div>
    <div class="row mt-4">
        @include('alerts.msg')
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <form action="{{ route('add') }}" method="post">
                @csrf
                <div class="card shadow mb-5 bg-body rounded">
                @php
                            // Ruta principal de la imagen
                            $imagePath = '/assets/img/products/men/chaquetas/chaqueta' . ($loop->index + 1) . '.webp';
                            // Ruta alternativa de la imagen
                            $newImagePath = '/assets/img/products/men/chaquetas/productosNuevos/productoNuevo' . ($loop->index + 1) . '.jpg';
                        @endphp
                        
                        @if (file_exists(public_path($imagePath)))
                            <img src="{{ asset($imagePath) }}" alt="chaqueta">
                        @else (file_exists(public_path($newImagePath)))
                            <img src="{{ asset($newImagePath) }}" alt="nueva chaqueta">
                        @endif
                    <div class="card-body">
                        <p class="TitleProduct"><strong>{{$product->name}}</strong></p>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <h5 class="mb-0">{{$product->price}}€</h5>
                            <div class="d-flex align-items-center">
                                <div class="mr-2">
                                    <select class="form-select form-select-sm" name="size_id">
                                        @foreach ($product->sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (auth()->user())
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-dark ms-2" name="cart-btn">
                                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                                </button>
                                @else
                                <button type="button" class="btn btn-dark ms-2" onclick="redirectLogin()">
                                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>

<script>
function redirectLogin() {
  window.location.href = "{{ route('login') }}";
}

</script>
@endsection
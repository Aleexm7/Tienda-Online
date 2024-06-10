@extends('layouts.general')

@section('womanPantalonesCorto')

<div class="container">
    <div class="d-flex flex-row mt-4">
        <span class="p-2 ms-2"><a href="{{ route('womanSection')}}" class="nav-link-list">Volver</a></span>
        <span class="p-2 ms-2"><a href="{{ route('womanPantalones') }}" class="nav-link-list">Largos</a></span>
        <span class="p-2 ms-2"><a href="{{ route('womanPantalonesCortos') }}" class="nav-link-list active">Cortos</a></span>
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
                            $imagePath = '/assets/img/products/woman/pantalones/pantalonCorto' . ($loop->index + 1) . '.webp';
                            // Ruta alternativa de la imagen
                            $newImagePath = '/assets/img/products/woman/pantalones/productosNuevos/productoNuevo' . ($loop->index + 1) . '.jpg';
                        @endphp
                        
                        @if (file_exists(public_path($imagePath)))
                            <img src="{{ asset($imagePath) }}" alt="pantalon corto">
                        @else (file_exists(public_path($newImagePath)))
                            <img src="{{ asset($newImagePath) }}" alt="pantalon corto nuevo">
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
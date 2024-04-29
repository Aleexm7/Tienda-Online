@extends('layouts.general')

@section('menSudaderas')
<div class="container">
    <div class="d-flex flex-row mt-4">
        <span class="p-2 ms-2"><a href="{{ route('menSudaderas') }}" class="nav-link-list active">Sudaderas</a></span>
        <span class="p-2 ms-2"><a href="{{ route('menSudaderaSinCapucha')}}" class="nav-link-list">Sudaderas sin capucha</a></span>
    </div>
    <div class="row mt-4">
    @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/sudaderas/sudadera'. $loop->index+1 .'.webp') }}" alt="SUDADERA BOXY AZUL">
                <div class="card-body">
                    <p class="TitleProduct"><strong>{{$product->name}}</strong></p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h5 class="mb-0">{{$product->price}}€</h5>
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
                            <form action="{{ route('add') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-dark ms-2" name="btn">
                                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection

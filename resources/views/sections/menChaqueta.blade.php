@extends('layouts.general')

@section('menChaquetas')
<div class="container">
    <div class="d-flex flex-row mt-2">
        <span class="p-2 ms-2"><a href="{{ route('menSection')}}" class="nav-link-list active">Volver</a></span>
    </div>
    <div class="row mt-4">
    @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('/assets/img/products/men/chaquetas/chaquetas'. $loop->index+1 .'.webp') }}">
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
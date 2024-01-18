@extends('layouts.admin-template')

@section('crud_edit')



<h2>Editar Producto</h2>

<form action="{{ route('products.edit', $product->id) }}" method="post">
    @method('put')
    @csrf <!-- Esto genera un token. Laravel sabe que es un tipo submit y no se va a explotar ninguna vulnerabilidad -->
    
    <div class="mb-3">
        <label for="product_name" class="form-label">Nombre</label>
        <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripcion</label>
        <input type="text" name="description" id="description" class="form-control" value="{{ $product->description }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Cantidad</label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
    </div>

    <a href="{{ route('products.customIndex') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
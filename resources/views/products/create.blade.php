@extends('layouts.admin-template')

@section('crud_create')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<h2>Formulario para crear un producto</h2>

<form action="{{ route('products.store') }}" method="post">
    @method('post')
    @csrf <!--Esto genera un token. Laravel sabe que es un tipo submit y no se va a explotar ninguna vulnerabilidad -->
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="product_name" id="product_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" name="stock" id="stock" class="form-control">
    </div>

    <a href="/products/index" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
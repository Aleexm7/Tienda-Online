@extends('layouts.dashboardadmin')

@section('crud_create')

@include('success')

<h2>Formulario para crear un producto</h2>

<form action="{{ route('products.store', $product->id) }}" method="post" enctype="multipart/form-data">
    @METHOD('POST')
    @csrf <!--Esto genera un token. Laravel sabe que es un tipo submit y no se va a explotar ninguna vulnerabilidad -->

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Imagen</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Categoria</label>
        <select id="category" name="category" class="form-control">
            <option value="sudaderas">Sudaderas</option>
            <option value="chaquetas">Chaquetas</option>
            <option value="pantalones">Pantalones</option>
            <option value="camisetas">Camisetas</option>
        </select>
    </div>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Stock total</label>
        <input type="number" name="total_stock" id="total_stock" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="section">Sección</label>
        <select id="section" name="section" class="form-control">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>
    </div>

    <a href="/dashboardadmin" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
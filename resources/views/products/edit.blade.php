@extends('layouts.dashboardadmin')

@section('crud_edit')

@include('success')

<h2>Editar Producto</h2>

<form action="{{route('product.update', $product->id)}}" method="POST">
    @method('PUT')
    @csrf <!-- Esto genera un token. Laravel sabe que es un tipo submit y no se va a explotar ninguna vulnerabilidad -->
    
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" name="image" id="image" class="form-control" value="{{ $product->image }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ $product->category }}">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock total</label>
        <input type="number" name="total_stock" id="total_stock" class="form-control" value="{{ $product->total_stock }}">
    </div>
    <div class="form-group">
            <label for="section">Sección</label>
            <select id="section" name="section" class="form-control" required>
                <option value="hombre" {{ $product->section == 'hombre' ? 'selected' : '' }}>Hombre</option>
                <option value="mujer" {{ $product->section == 'mujer' ? 'selected' : '' }}>Mujer</option>
            </select>
    </div>

    <a href="{{ route('dashboardadmin') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
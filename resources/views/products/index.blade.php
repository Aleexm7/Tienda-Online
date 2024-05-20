@extends('layouts.dashboardadmin');



@section('crud')
@include('success')

<a class="btn btn-primary mt-4" href="{{ URL('dashboardadmin/products/create') }}">Crear</a>

<form method="get" action="{{ route('products.customIndex') }}" class="mt-2">
    <label for="cantidadRegistros">Mostrar:</label>
    <select id="cantidadRegistros" name="show" onchange="this.form.submit()">
        <option value="5" {{ request('show') == 5 ? 'selected' : '' }}>5</option>
        <option value="10" {{ request('show') == 10 ? 'selected' : '' }}>10</option>
        <option value="20" {{ request('show') == 20 ? 'selected' : '' }}>20</option>
    </select>
</form>

<table id="TablaProductos" class="table table-striped table-bordered shadow-lg mt-2" style="width:100%">
    <thead class="bg bg-primary text-white">
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th>
            <th scope="col">categoria</th>
            <th scope="col">Seccion</th>
            <th scope="col">stock Total</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->section}}</td>
            <td>{{$product->total_stock}}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>




@endsection
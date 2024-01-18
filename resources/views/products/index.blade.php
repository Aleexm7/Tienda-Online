@extends('layouts.admin-template');



@section('crud')

<a class="btn btn-primary mt-4" href="{{ URL('products/create') }}">Crear</a>

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
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>

            <td>
                <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-danger" href="{{ route('products.edit', $product->id) }}"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>




@endsection
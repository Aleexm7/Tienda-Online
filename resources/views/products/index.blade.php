@extends('products.viewproducts');



@section('crud')

<a class="btn btn-primary mt-4" href="{{ URL('products/create') }}">Crear</a>

<table id="TablaProductos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
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
                <a class="btn btn-info" href="{{ route('products.edit', $product->id) }}"><i class="fa-solid fa-pencil"></i></a>
                <a class="btn btn-danger" href="{{ route('products.edit', $product->id) }}"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>




@endsection
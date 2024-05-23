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
            <td class="text-center">
                <div class="d-inline-block">
                    <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>

                <div class="d-inline-block">
                    <form id="delete-product-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>


<!-- /*MODAL PARA ELIMINAR UN REGISTRO */ -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
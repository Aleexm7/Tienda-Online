@extends('layouts.dashboardadmin')



@section('users')

<form method="get" action="{{ route('products.customIndex') }}" class="mt-4">
    <label for="cantidadRegistros">Mostrar:</label>
    <select id="cantidadRegistros" name="show" onchange="this.form.submit()">
        <option value="5" {{ request('show') == 5 ? 'selected' : '' }}>5</option>
        <option value="10" {{ request('show') == 10 ? 'selected' : '' }}>10</option>
        <option value="20" {{ request('show') == 20 ? 'selected' : '' }}>20</option>
        <option value="50" {{ request('show') == 50 ? 'selected' : '' }}>50</option>
    </select>
</form>
<table id="TablaUsers" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg bg-primary text-white">
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->user_role}}</td>
            
            <td class="text-center">
                <div class="d-inline-block">
                    <a class="btn btn-warning" href="{{ route('user.edit', $user->id) }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>

                <div class="d-inline-block">
                    <form id="delete-product-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST">
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
@endsection

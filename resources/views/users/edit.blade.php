@extends('layouts.dashboardadmin')

@section('user_edit')

@include('success')
<h2>Editar usuarios</h2>

<form action="{{route('user.update', $users->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $users->email}}">
    </div>
    <div class="form-group">
            <label for="user_role">Rol</label>
            <select id="user_role" name="user_role" class="form-control" required>
                <option value="customer" {{ $users->user_role == 'customer'}}>Customer</option>
                <option value="admin" {{ $users->user_role == 'admin'}}>Admin</option>
            </select>
    </div>

    <a href="{{ route('dashboardadmin') }}" class="btn btn-secondary mt-2">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
</form>

@endsection
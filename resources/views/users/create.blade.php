@extends('layouts.dashboardadmin')

@section('user_create')

@include('success')

<h2>Crear usuario</h2>

<form action="{{ route('user.store', $users->id) }}" method="post" id="userForm">
    @METHOD('POST')
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    
    <div class="form-group mb-3">
        <label for="user_role">Rol</label>
        <select id="user_role" name="user_role" class="form-control">
            <option value="customer">Customer</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    
    <a href="/dashboardadmin" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>



<script>
document.addEventListener('DOMContentLoaded', function() {
        // Obtenenemos el id del  formulario
        var userForm = document.getElementById('userForm');
        
        // Agregamos un listener para el evento submit
        userForm.addEventListener('submit', function(event) {
            // Obtenenemos el valor seleccionado del campo user_role
            var userRole = document.getElementById('user_role').value;
            console.log('Rol seleccionado:', userRole);
        });
    });
</script>
@endsection
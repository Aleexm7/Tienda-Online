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
    
    <div class="form-group mb-3">
        <label for="section">Sección</label>
        <select id="section" name="section" class="form-control">
            <option value="men">Hombre</option>
            <option value="woman">Mujer</option>
        </select>
    </div>
    <div class="mb-3 form-group">
        <label for="category" class="form-label">Categoría</label>
        <select id="category" name="category" class="form-control">
            <!-- Opción predeterminada para la categoría -->
            <option value="">Seleccione una categoría</option>
        </select>
    </div>
    <div class="mb-3 form-group">
        <label for="" class="form-label">Stock total</label>
        <input type="number" name="total_stock" id="total_stock" class="form-control">
    </div>
    <a href="/dashboardadmin" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var categories = {
        men: ['Sudaderas', 'Sudaderas sin capucha', 'Camisetas basicas', 'Camisetas cropped', 'Camisetas estampadas', 'Pantalones vaquero', 'Pantalones baggy', 'Pantalones cargo', 'Chaquetas'],
        woman: ['Camisetas basicas', 'Pantalones largo', 'Pantalones corto', 'Vestido largo', 'Vestido corto', 'zapatos']
    };
    var sectionSelect = document.getElementById('section');
    var categorySelect = document.getElementById('category');

    sectionSelect.addEventListener('change', function () {
        var selectedSection = this.value;

        // Limpiar las opciones actuales del select de categorías
        while (categorySelect.firstChild) {
            categorySelect.removeChild(categorySelect.firstChild);
        }

        // Agregar la opción predeterminada
        var defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.textContent = 'Seleccione una categoría';
        defaultOption.selected = true;
        categorySelect.appendChild(defaultOption);

        // Agregar nuevas opciones basadas en la sección seleccionada
        if (selectedSection && categories[selectedSection]) {
            categories[selectedSection].forEach(function (category) {
                var option = document.createElement('option');
                option.value = category;
                option.textContent = category;
                categorySelect.appendChild(option);
            });
        }
    });
});
</script>
@endsection
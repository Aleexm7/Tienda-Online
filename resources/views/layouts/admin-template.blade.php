<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Panel administrador
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <script>
    // Inicializa la DataTable con paginación y opciones de mostrar 10, 20, y 50 elementos por página
    $(document).ready(function() {
      $('#TablaProductos').DataTable({
        "lengthMenu": [
          [5, 10, 50, -1],
          [5, 10, 50, "All"]
        ],

      });
    });
  </script>
</head>

<body>
   <!-- Navbar a la izquierda -->
   <div class="container-fluid">
    <div class="row">
      <!-- Navbar a la izquierda -->
      <aside class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="bi bi-box"></i> Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-gear"></i> Configuración
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-person"></i> Cuenta
              </a>
            </li>
          </ul>
        </div>
      </aside>

    </div>
    
    <!-- Contenido principal -->
    <div class="row">
      <div class="col-md-12">
        <!-- Aquí va el contenido principal de tu página -->
        @yield('contenido')
      </div>
    </div>

    <!-- Otro contenido en el main -->
    <div class="row mt-4">
      <div class="col-md-12">
        <!-- Aquí puedes añadir más contenido en el main -->
        @yield('crud')
      </div>
    </div>
  </div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Panel administrador
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 bg-dark text-white p-3">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
          <span class="fs-4">Panel de control</span>
        </a>
        <hr class="bg-light">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link link-light d-flex align-items-center" aria-current="page">
              <span class="material-symbols-outlined">home</span> Home
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-light">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-light">Pedidos</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-light">Productos</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-light">Clientes</a>
          </li>
        </ul>
        <hr class="bg-light">
        <div class="dropdown">
          <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuración
          </button>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="{{ url('/dashboard') }}">Cuenta</a> </li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Cerrar sesión</button>
              </form>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-10 p-5">
        @yield('crud')
        @yield('crud_create')
        @yield('crud_edit')
      </div>
    </div>
  </div>
</body>

</html>
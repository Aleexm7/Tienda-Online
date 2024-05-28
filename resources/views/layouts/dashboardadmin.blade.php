<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="min-vh-100 d-flex flex-column" id="dashboardContent">
  <div class="row flex-grow-1">
    <!-- Sidebar -->
    <div class="col-2 bg-dark text-white p-3">
      <div class="text-center">
        <span class="fs-4">Panel de control</span>
      </div>
      <ul class="nav flex-column" id="dashboard">
        <li class="nav-item mt-2">
          <a href="#" class="nav-link link-light d-flex align-items-center active">
            <img src="{{asset('assets/img/icons/layout.svg')}}" alt="icono dashboard" class="me-2">
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-2">
          <a href="{{route('home')}}" class="nav-link link-light d-flex align-items-center" aria-current="page">
            <img src="{{asset('assets/img/icons/globe.svg')}}" alt="icono dashboard" class="me-2">
            <span>Sitio web</span>
          </a>
        </li>
        <li class="nav-item mt-2 dropdown">
          <a href="#" class="nav-link link-light d-flex align-items-center dropdown-toggle" id="productosDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-box me-2"></i>
            <span>Productos</span>
            <i class="fas fa-chevron-down ms-auto"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="productosDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('products.create') }}">
                <i class="fa-solid fa-plus me-2"></i>
                Insertar producto
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item mt-2 dropdown">
          <a href="#" class="nav-link link-light d-flex align-items-center dropdown-toggle" id="productosDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('assets/img/icons/users.svg')}}" alt="icono usuarios" class="me-2">
            <span>Usuarios</span>
            <i class="fas fa-chevron-down ms-auto"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="productosDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('showUsers') }}">
                <img src="{{asset('assets/img/icons/eye.svg')}}" alt="icono visualizar" class="me-2">
                Ver usuarios
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('user.create') }}">
              <i class="fa-solid fa-plus me-2"></i>
                Agregar usuarios
              </a>
            </li>
          </ul>
        </li>
      </ul>

    </div>
    <!-- Main Content -->
    <div class="col-10">
      <!-- Form Section -->
      <div class="row">
        <div class="col-12 d-flex justify-content-end ml-4">
          <div class="dropdown mt-3">
            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-cog me-2"></i>
            </button>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{ url('/dashboard') }}">
                <img src="{{asset('assets/img/icons/user.svg')}}" alt="icono user" class="me-2">
                  Cuenta
                </a>
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    Cerrar sesión
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Content Section -->
      <div class="row">
        <div class="col-12">
          <!-- Aquí se renderizan las secciones del CRUD -->
          @yield('crud')
          @yield('crud_create')
          @yield('crud_edit')
          @yield('users')
          @yield('user_edit')
          @yield('user_create')
        </div>
      </div>
    </div>
  </div>
</body>

</html>
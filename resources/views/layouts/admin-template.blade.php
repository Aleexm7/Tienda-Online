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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="d-flex vh-100">
<div class="col-2 bg-dark text-white p-0">
    <div class="p-3">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
        <span class="fs-4">Panel de control</span>
      </a>
      <hr class="bg-light">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link link-light" aria-current="page">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-light">
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-light">
            Pedidos
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-light">
            Productos
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link link-light">
            Clientes
          </a>
        </li>
      </ul>
      <hr class="bg-light">
      <div class="btn-group dropdown">
        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuración
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Cuenta</a>
          <a class="dropdown-item" href="#">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-10">
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <!-- Contenido principal -->
          @yield('crud')
          @yield('crud_create')
          @yield('crud_edit')
        </div>
      </div>
    </div>
  </div>
</body>
</html>
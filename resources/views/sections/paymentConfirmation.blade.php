@extends('layouts.template')

@section('paymentConfirmation')

<div class="container-fluid bg-secondary p-2 text-dark bg-opacity-25 overflow-x-hidden">
    <div class="row">
        <div class="d-flex justify-content-center mt-2">
            <h5><a href="{{route('home')}}" class="text-body">Volver a la tienda</a></h5>
        </div>

        <div class="col-md-8 mx-auto mt-4">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Confirmación de Pago</h2>

                    <h3>Datos de Facturación</h3>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Nombre:</strong> {{ $billingData['name'] }}</li>
                        <li class="list-group-item"><strong>Apellidos:</strong> {{ $billingData['apellidos'] }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $billingData['email'] }}</li>
                        <li class="list-group-item"><strong>Dirección:</strong> {{ $billingData['address'] }}</li>
                        <li class="list-group-item"><strong>Dirección alternativa:</strong> {{ $billingData['address2'] }}</li>
                        <li class="list-group-item"><strong>País:</strong> {{ $billingData['pais'] }}</li>
                        <li class="list-group-item"><strong>Ciudad:</strong> {{ $billingData['ciudad'] }}</li>
                        <li class="list-group-item"><strong>Código Postal:</strong> {{ $billingData['cp'] }}</li>
                    </ul>

                    <h3>Productos Comprados</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tamaño</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartProducts as $product)
                                <tr>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_size }}</td>
                                    <td>{{ $product->product_price }}€</td>
                                    <td>{{ $product->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h3>Resumen de Pago</h3>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Subtotal:</strong> {{ $subtotal }}€</li>
                        <li class="list-group-item"><strong>Total (Incl. impuestos):</strong> {{ $total }}€</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

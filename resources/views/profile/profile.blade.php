@extends('layouts.template')

@section('profile')
<div class="container py-4 bg-dark">
    <div class="row">
        <div class="col-4">
            <div class="bg-white rounded-lg shadow-sm p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="position-relative flex-shrink-0 rounded-circle overflow-hidden" style="width: 64px; height: 64px;">
                        <img src="/placeholder.svg" alt="User Avatar" class="img-fluid" />
                        <div class="d-flex align-items-center justify-content-center w-100 h-100 rounded-circle bg-light position-absolute top-0 start-0">JD</div>
                    </div>
                    <div class="ms-3">
                        <h2 class="h4 mb-0">John Doe</h2>
                        <p class="text-muted mb-0">johndoe@example.com</p>
                    </div>
                </div>
                <div>
                    <h3 class="h5">Address</h3>
                    <p class="text-muted">123 Main St, Anytown USA 12345</p>
                </div>
                <div class="mt-4">
                    <h3 class="h5">Payment Methods</h3>
                    <div class="d-flex">
                        <div class="d-flex align-items-center me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-muted me-2">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <line x1="2" x2="22" y1="10" y2="10"></line>
                            </svg>
                            <p class="mb-0">Visa *1234</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-muted me-2">
                                <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                                <path d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21"></path>
                            </svg>
                            <p class="mb-0">PayPal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="bg-white rounded-lg shadow-sm p-4 mt-4">
                <h2 class="h4 mb-4">Order History</h2>
                <div class="row">
                    @foreach ($orders as $order)
                    <div class="d-flex justify-content-around">
                        <h5>{{ $order->name }}</h5>
                        <p class="text-muted">Quantity: {{ $order->quantity }}</p>
                        <p class="text-muted">Subtotal: ${{ $order->subtotal }}</p>
                        <p class="text-muted">Estado: {{ $status->status}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
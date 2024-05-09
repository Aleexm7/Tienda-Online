@extends('layouts.template')

@section('checkout')

<!-- Modal -->
<div class="modal fade" id="orderSuccessModal" tabindex="-1" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #5cb85c; color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="orderSuccessModalLabel">¡Pedido realizado con éxito!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Tu pedido ha sido procesado satisfactoriamente. Nos alegra informarte que hemos recibido tu pedido y estamos trabajando en él.</p>
        <p>Recibirás un correo electrónico de confirmación en breve con los detalles de tu pedido y la información de seguimiento.</p>
        <p>Gracias por elegirnos. Si tienes alguna pregunta o necesitas asistencia adicional, no dudes en ponerte en contacto con nuestro equipo de atención al cliente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h4 class="mb-3"><strong>Dirección de facturación</strong></h4>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos">
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" id="address">
            </div>
            <div class="mb-3">
                <label for="address2">Dirección alternativa<span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2">
            </div>
            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="address">País</label>
                    <input type="text" class="form-control" id="pais">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">Ciudad</label>
                    <input type="text" class="form-control" id="pais">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Codigo Postal</label>
                    <input type="text" class="form-control" id="cp">
                </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

        </div>

        <div class="col-lg-5">
            <div class="card bg-primary text-white rounded-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Detalles bancario</h5>
                    </div>
                    <p class="small mb-2">Tipo de tarjeta</p>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                    <form class="mt-4">
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                            <label class="form-label" for="typeName">Nombre completo</label>
                        </div>
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" id="typecard" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Número de la tarjeta</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                    <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                    <label class="form-label" for="typeExp">Expiración</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                    <input type="password" id="cvv" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                    <label class="form-label" for="typeText">Cvv</label>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Subtotal</p>
                            <p class="mb-2">$4798.00</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Envio</p>
                            <p class="mb-2">$20.00</p>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-2">Total(Incl. impuestos)</p>
                            <p class="mb-2">$4818.00</p>
                        </div>
                        <button id="checkoutBtn" type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg" onclick="mostrarModalYCerrar()">
                            <div class="d-flex justify-content-between">
                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
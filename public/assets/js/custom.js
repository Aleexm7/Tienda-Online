console.log('ESTOY DENTRO DE CUSTOM.JS');


function redirectLogin() {
  window.location.href = "{{ route('login') }}";
}


function mostrarModalYCerrar() {
  
  $('#orderSuccessModal').modal('show');

  // Cerrar el modal después de 5 segundos
  setTimeout(function(){
    $('#orderSuccessModal').modal('hide');
  }, 10000); 
}


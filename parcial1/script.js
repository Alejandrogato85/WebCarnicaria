const botonConfirmar = document.querySelector('#btn-confirmar');

function mostrarMensaje() {
  const mensaje = document.querySelector('#mensaje');
  mensaje.textContent = 'Turno recibido - te atiende Tu Nombre Completo';
  mensaje.classList.remove('oculto');
}

botonConfirmar.addEventListener('click', mostrarMensaje);

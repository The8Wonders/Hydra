console.log('funcionando');
var formularioProyecto = document.getElementById('formProyecto');

formularioProyecto.addEventListener('submit', function (e) {
  e.preventDefault();
  console.log('Clic Proyecto')

  var datos = new FormData(formularioProyecto);

  console.log(datos)
  console.log(datos.get('nombre'))
  console.log(datos.get('codProyecto'))

  fetch('../../../controladores/proyecto.insert.controlador.php', {
    method: 'POST',
    body: datos
  })
    .then(res => res.json())
    .then(data => {
      console.log(data)

      if (data == 'incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'correcto') {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })
        } else {
            if (data == 'incorrecto') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se pudo registrar la cuenta',
              })
            } else {
                if (data == 'correo') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: 'El correo ya se encuentra registrado',
                  })
                
                }
              }}}})})
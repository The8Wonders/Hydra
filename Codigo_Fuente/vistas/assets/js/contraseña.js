
var formularioContraseña = document.getElementById('cambioContra');

formularioContraseña.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioContraseña);

  fetch('../../../controladores/cambiarContra.controlador.php', {
    method: 'POST',
    body: datos
  })
    .then(res => res.json())
    .then(data => {
    

      if (data == 'incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'Exito') {
          document.getElementById("cambioContra").reset();
          Swal.fire({
            icon: 'success',
            title: 'Creado con exito',
            text: 'El administrador se creo con exito',
          })
        } else {
          if (data == 'Error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          } else {
            if (data == 'CoIgualAnterior') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se pudo registrar la cuenta',
              })
            } else {
              if (data == 'Ncoinciden') {
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'El rut ya se encuentra registrado',
                })
              } else {
                if (data == 'Cincorrecta') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: 'El correo ya se encuentra registrado',
                  })
                }else{
                  if(data == 'RNexiste'){
                    Swal.fire({
                      icon: 'error',
                      title: 'Lo sentimos',
                      text: 'No se puede registrar administrador',
                    })
                  }
                }
              }
            }
          }

        }
      }
    })

})

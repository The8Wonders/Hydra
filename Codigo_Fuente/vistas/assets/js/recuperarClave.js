
var formularioClave = document.getElementById('recuperarClave');

formularioClave.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioClave);

  // console log
  console.log(datos.get('nombre'))
  console.log(datos.get('apellido'))
  console.log(datos.get('rut'))
  console.log(datos.get('correo'))
  console.log(datos.get('telefono'))
  console.log(datos.get('rol'))

  fetch('../../../ajax/recuperarClave.ajax.php', {
    method: 'POST',
    body: datos
  })
    .then(res => res.json())
    .then(data => {
    
      if (data == 'incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe ingresar un correo',
        })
      } else {
        if (data == 'enviado') {
          document.getElementById("recuperarClave").reset();
          Swal.fire({
            icon: 'success',
            title: 'Enviado',
            text: 'Se envió un correo con su clave',
          })
        } else {
          if (data == 'contraseñas') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          } else {
            if (data == 'Error') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No existe ese correo en la base de datos',
              })
            } else {
              if (data == 'NoencuentraAdmin') {
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'No se encuentra la cuenta',
                })
              } else {
                if (data == 'correo') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: 'El correo ya se encuentra registrado',
                  })
                }else{
                  if(data == 'administrador'){
                    Swal.fire({
                      icon: 'error',
                      title: 'Lo sentimos',
                      text: 'No se puede registrar administrador',
                    })
                  }else{
                    if(data == 'RutNValidado'){
                      Swal.fire({
                        icon: 'error',
                        title: 'Lo sentimos',
                        text: 'El rut no es valido',
                      })
                    }
                  }
                }
              }
            }
          }

        }
      }
    })

})

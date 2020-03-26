
var formularioPerfil = document.getElementById('perfilAlumno');

formularioPerfil.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioPerfil);

  fetch('../../../ajax/perfil_alumno.ajax.php', {
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
        if (data == 'Actualizada') {
          document.getElementById("perfilAlumno").reset();
          Swal.fire({
            icon: 'success',
            title: 'Se ha actualizado',
            text: 'El alumno se actualizó con exito',
          })
        } else {
          if (data == 'contraseñas') {

            Swal.fire({
              icon: 'errorr',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          } else {
            if (data == 'Error') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se pudo actualizar la cuenta',
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
                  if(data == 'incorrecto'){
                    Swal.fire({
                      icon: 'error',
                      title: 'Lo sentimos',
                      text: 'No se puedo actualizar',
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

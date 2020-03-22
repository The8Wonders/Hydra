
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
            text: 'Contraseña cambiada con exito',
          })
        } else {
          if (data == 'Error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo cambiar las contraseñas',
            })
          } else {
            if (data == 'CoIgualAnterior') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'Esta contraseña esta siendo ocupada actualmente',
              })
            } else {
              if (data == 'Ncoinciden') {
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'Las nuevas contraseñas deben coincidir',
                })
              } else {
                if (data == 'Cincorrecta') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: 'la contraseña actual no es correcta',
                  })
                }else{
                  if(data == 'RNexiste'){
                    Swal.fire({
                      icon: 'error',
                      title: 'Lo sentimos',
                      text: 'No se encuentra una cuenta asociada',
                    })
                  }else{
                    if(data == 'RutModificado'){
                      Swal.fire({
                        icon: 'error',
                        title: 'Lo sentimos',
                        text: 'No modifique el rut',
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

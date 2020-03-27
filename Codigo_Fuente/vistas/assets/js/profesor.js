
var formularioProfesor = document.getElementById('formProfesor');

formularioProfesor.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioProfesor);

  fetch('../../../ajax/profesor.ajax.php', {
    method: 'POST',
    body: datos
  })
    .then(res => res.json())
    .then(data => {

      console.log(data);

      if (data == 'incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'correcto') {
          document.getElementById("formProfesor").reset();
          window.location.replace("http://198-35.eq.ubiobio.cl:1044/index.php");
          Swal.fire({
            icon: 'success',
            title: 'Cuenta Creada',
            text: 'La cuenta a sido creada con exito',
          })
          
        } else {
          if (data == 'contraseñas') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          } else {
            if (data == 'incorrecto') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se pudo registrar la cuenta',
              })
            } else {
              if (data == 'rut') {
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'El rut ya se encuentra registrado',
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
                    }else{
                      if(data == 'CorreoM'){
                        Swal.fire({
                          icon: 'error',
                          title: 'Lo sentimos',
                          text: 'El Correo no es valido',
                        })
                      }
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
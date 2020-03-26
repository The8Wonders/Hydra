console.log('funcionando');
var formularioGrupo = document.getElementById('formGrupo');

formularioGrupo.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioGrupo);

  fetch('../../../ajax/grupo.ajax.php', {
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
        if (data == 'Correcto') {
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })
        } else {
          if (data == 'error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          }

        }
      }
    })

})
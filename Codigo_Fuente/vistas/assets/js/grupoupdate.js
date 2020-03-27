console.log('funcionando');
var formularioGrupo = document.getElementById('formGrupo-update');

formularioGrupo.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioGrupo);

  fetch('../../../ajax/grupo-update.ajax.php', {
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
        if (data == 'Correcto') {
          Swal.fire({
            icon: 'success',
            title: 'Exito...',
            text: 'Modificacion del Grupo con exito',
          })
        } else {
          if (data == 'error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo modificar el Grupo',
            })
          }

        }
      }
    })

})
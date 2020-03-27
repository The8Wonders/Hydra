console.log('funcionando');
var formularioGrupo = document.getElementById('formGrupo');

formularioGrupo.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioGrupo);
 // console.log(datos.get('rut'))
  fetch('../../../ajax/grupo.ajax.php', {
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
            text: 'Grupo insertado con exito',
          })
        } else {
          if (data == 'error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo insertar Grupo',
            })
          }

        }
      }
    })

})
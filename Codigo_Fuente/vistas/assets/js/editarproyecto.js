var editarProyecto = document.getElementById('editProyecto');

editarProyecto.addEventListener('submit', function (e) {
  e.preventDefault();

  console.log('holi llego aca');

  var datos = new FormData(editarProyecto);

  fetch('../../../ajax/edit.proyecto.php', {
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
        if (data == 'NoencuentraProyecto') {
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'No se encontro este proyecto',
          })
        } else {
          if (data == 'Actualizado') {
            document.getElementById("editProyecto").reset();
            Swal.fire({
              icon: 'success',
              title: 'Actualizada',
              text: 'Los datos del profesor han sido actualizados',
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo actualizar el profesor',
            })
          }
        }
      }

    })
})
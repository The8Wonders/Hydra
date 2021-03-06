var eliminarProfesor = document.getElementById('editProfesor');

eliminarProfesor.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(eliminarProfesor);

  console.log(datos)
  console.log(datos.get('rut'))
  console.log(datos.get('nombre-edit'))
  console.log(datos.get('apellido-edit'))
  console.log(datos.get('telefono-edit'))
  console.log(datos.get('correo-edit'))
  console.log(datos.get('codigoRol'))

  fetch('../../../ajax/edit.profesor.php', {
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
        if (data == 'NoencuentraProfesor') {
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'No se encontro la cuenta de este profesor',
          })
        } else {
          if (data == 'Actualizada') {
            document.getElementById("editProfesor").reset();
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
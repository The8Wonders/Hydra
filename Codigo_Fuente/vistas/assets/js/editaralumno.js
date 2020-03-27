var eliminarAlumno = document.getElementById('editAlumno');

eliminarAlumno.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(eliminarAlumno);
   //redirecciona a ruta 
  fetch('../../../ajax/edit.alumno.php', {
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
        if (data == 'NoencuentraAlumno') {
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'No se encontro la cuenta de este Alumno',
          })
        } else {
          if (data == 'Actualizada') {
            document.getElementById("editAlumno").reset();
            Swal.fire({
              icon: 'success',
              title: 'Actualizada',
              text: 'Los datos del Alumno han sido actualizados',
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo actualizar el Alumno',
            })
          }
        }
      }

    })
})
var editarProfesor = document.getElementById('editSemestre');

editarProfesor.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(editarProfesor);

  fetch('../../../ajax/edit.semestre.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      console.log(data)
      if (data == 'Incompleto') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'NoEncontrado') {
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'No se encontro el semestre que desea modificar',
          })
        } else {
          if (data == 'Actualizado') {
            Swal.fire({
              icon: 'success',
              title: 'Actualizada',
              text: 'Los datos del semestre han sido actualizados',
            })
          } else {
            if(data == 'Fecha'){
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'La fecha de inicio no puede ser mayor a la fecha de fin',
              })
            }
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se pudo actualizar el semestre',
            })
          }
        }
      }

    })
})
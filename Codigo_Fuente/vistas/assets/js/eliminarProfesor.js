var eliminarProfesor = document.getElementById('eliminar');

eliminarProfesor.addEventListener('submit', function (e) {
  e.preventDefault();

  Swal.fire({
    title: '¿Estas seguro?',
    text: "Se eliminara el profesor",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtontext: 'Cancelar',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    var datos = new FormData(eliminarProfesor);

    fetch('../../../ajax/profesor.ajax.php', {
        method: 'POST',
        body: datos
      })
      .then(res => res.json())
      .then(data => {
        console.log(data)
        if (data == 'incompleto') {

          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'Debe rellenar todo los campos',
          })
        } else {
          if (data == 'Noexiste') {
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'El profesor que desea eliminar no se encuentra registrado en el sistema',
            })
          } else {
            if (data == 'Eliminada') {
              Swal.fire({
                icon: 'success',
                title: 'Eliminado con exito',
                text: 'El profesor se elimino con exito',
              })
            } else {
              if(data == 'NoProfesor'){
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'No se pudo eliminar el profesor',
                })
              }else{
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'No se pudo eliminar la cuenta',
                })
              }
            }
          }
        }
      })
  })
})
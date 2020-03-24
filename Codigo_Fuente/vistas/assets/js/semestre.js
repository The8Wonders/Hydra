console.log('conectado');
var formularioSemestre = document.getElementById('formSemestre');

formularioSemestre.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioSemestre);

  fetch('../../../ajax/semestre.ajax.php', {
    method: 'POST',
    body: datos
  })
  .then(res => res.json())
  .then(data => {
    if(data == 'incompletos'){
      Swal.fire({
        icon: 'error',
        title: 'Lo sentimos',
        text: 'Debe rellenar todo los campos',
      })
    }else{
      if(data == 'fechas'){
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'La fecha de fin no puede ser anterior a la fecha de inicio',
        })
      }else{
        if(data == 'codSemestre'){
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'Este semestre ya se encuentra en el sistema',
          })
        }else{
          if (data == 'exito'){
            document.getElementById("formSemestre").reset();
            Swal.fire({
              icon: 'success',
              title: 'Exito',
              text: 'Guardado con exito',
            })
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimo',
              text: 'No se puede crear el semestre',
            })
          }
        }
      }
    }
  })
})
console.log('funcionando');
var formularioProyecto = document.getElementById('formProyecto');

formularioProyecto.addEventListener('submit', function (e) {
  e.preventDefault();
  console.log('Clic Proyecto')

  var datos = new FormData(formularioProyecto);

  console.log(datos)
  console.log(datos.get('nombre'))
  console.log(datos.get('codigoProyecto'))

  fetch('../../../ajax/proyecto.ajax.php', {
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
        if(data == 'fechaInicioFechaFin'){
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'La fecha de fin no puede ser anterior a la fecha de inicio',
          })
        }else{
          if(data == 'codProyecto'){
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'El codigo del proyecto ya se encuentra registrado',
            })
          }else{
            if(data == 'nomProyecto'){
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'Ya se encuentra un proyecto con este nombre',
              })
            }else{
              if(data == 'correcto'){
                document.getElementById("formProyecto").reset();
                Swal.fire({
                  icon: 'success',
                  title: 'Registrado con Exito',
                  text: 'El proyecto se acaba de registrar en el sistema',
                })
              }else{
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'No se a podido registrar el proyecto',
                })
              }
            }
          }
        }
      }
    })
})
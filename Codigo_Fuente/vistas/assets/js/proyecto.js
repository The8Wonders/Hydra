var formularioProyecto = document.getElementById('formProyecto');

formularioProyecto.addEventListener('submit', function (e) {
  e.preventDefault(); /* recoge todo los datos del formulario */


  var datos = new FormData(formularioProyecto);

  fetch('../../../ajax/proyecto.ajax.php', {  /* Envia los datos a la direccion por metodo POST y los datos almacenados en *datos* */
      method: 'POST',
      body: datos
    })
    .then(res => res.json())   /* Ocurre la promesa, aqui lee la respuesta que llega desde donde se enviaron los datos */
    .then(data => {

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
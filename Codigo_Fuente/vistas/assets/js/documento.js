var formularioDocumento = document.getElementById('formDocumento');

formularioDocumento.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioDocumento);

  console.log(datos)
  console.log(datos.get('nombre'))
  console.log(datos.get('descripcion'))
  console.log(datos.get('documento'))

  fetch('../../../ajax/documento.ajax.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      if (data == 'Incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'Exito') {
          document.getElementById("formDocumento").reset();
          Swal.fire({
            icon: 'success',
            title: 'Creado con exito',
            text: 'Documento subido con exito',
          })
        } else {
          if (data == 'Error') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'no se h podido subir el documento',
            })
          }else{
            if(data == 'NoseMovio'){
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se movio al servidor el documento',
              })
            }
          }
        }
      }
    })

})
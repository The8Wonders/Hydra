var formularioTarea=document.getElementById('formTarea');

formularioTarea.addEventListener('submit', function (e) {
	e.preventDefault();

	var datos= new FormData(formularioTarea);

	fetch('../../../ajax/tarea.ajax.php', {
		method:'POST',
		body:datos
	}) 
	.then(res=>res.json())
	.then(data=>{
    console.log(data)
    if(data == 'codRe'){
      Swal.fire({
        icon: 'error',
        title: 'Lo sentimos',
        text: 'Debe seleccionar un requerimiento para asignarle una tarea',
      })
    }else{
      if(data == 'Incompleto'){
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      }else{
        if(data == 'codExistente'){
          Swal.fire({
            icon: 'error',
            title: 'Lo sentimos',
            text: 'Vuelva a intentarlo por favor',
          })
        }else{
          if(data == 'Exito'){
            Swal.fire({
              icon: 'success',
              title: 'Guardado con exito',
              text: 'La tarea a sido guardada con exito',
            })
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'No se a podido registrar su tarea',
            })
          }
        }
      }
    }

	})

})
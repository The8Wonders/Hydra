var formularioRequerimiento=document.getElementById('formRequerimiento');

formularioRequerimiento.addEventListener('submit', function (e) {
	e.preventDefault();

	var datos= new FormData(formularioRequerimiento);

	fetch('../../../ajax/requerimiento.ajax.php', {
		method:'POST',
		body:datos
	}) // adonde voy a enviar los datos
	.then(res=>res.json())
	.then(data=>{
		console.log(data)
		if (data =='Incompleto') {

		Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
		}else{
			if (data=='cod_existente') {
				Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Ya se encuentra el codigo registrado',
        })
			}else{
				if (data=='Correcto') {
					document.getElementById("formRequerimiento").reset();
					Swal.fire({
          icon: 'success',
          title: 'Registrado',
          text: 'Se registro con exito',
        })
				}else{
					Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'No se pudo registrar el requerimiento',
        })
				}
			}
		}
	})

})
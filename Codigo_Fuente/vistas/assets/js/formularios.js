var formulario = document.getElementById('formAlumno');

formulario.addEventListener('submit', function (e) {
	e.preventDefault();

	var datos = new FormData(formulario);

	fetch('../../../controladores/nuevo.alumno.controlador.php', {
		method: 'POST',
		body: datos
	})
		.then(res => res.json())
		.then(data => {

			if (data == 'incompletos') {
				Swal.fire({
					icon: 'error',
					title: 'Lo sentimos',
					text: 'Debe rellenar todo los campos',
				})
			} else {
				if (data == 'correcto') {
					document.getElementById("formAlumno").reset();
					Swal.fire({
						icon: 'success',
						title: 'Registro Correcto',
						text: 'El alumno se a registrado correctamente',
					})
				} else {
					if (data == 'contraseñas') {

						Swal.fire({
							icon: 'error',
							title: 'Lo sentimos',
							text: 'Las contraseñas no coinciden',
						})
					} else {
						if (data == 'incorrecto') {
							Swal.fire({
								icon: 'error',
								title: 'Lo sentimos',
								text: 'No se pudo registrar la cuenta',
							})
						} else {
							if (data == 'rut') {
								Swal.fire({
									icon: 'error',
									title: 'Lo sentimos',
									text: 'El rut ya se encuentra registrado',
								})
							} else {
								if (data == 'correo') {
									Swal.fire({
										icon: 'error',
										title: 'Lo sentimos',
										text: 'El correo ya se encuentra registrado',
									})
								}else{
									if(data == 'alumno'){
										Swal.fire({
											icon: 'error',
											title: 'Lo sentimos',
											text: 'El alumno no se a podido registrar',
										})
									}else{
										if(data == 'RutNValidado'){
											Swal.fire({
                        icon: 'error',
                        title: 'Lo sentimos',
                        text: 'El rut no es valido',
                      })
										}
									}
								}
							}
						}
					}

				}
			}

		})
})


var formularioLogin = document.getElementById('formLogin');

formularioLogin.addEventListener('submit', function (e) {
	e.preventDefault();
	console.log('Haz echo click');

	var datos = new FormData(formularioLogin);

	console.log(datos)
	console.log(datos.get('rut_usuario'))
	console.log(datos.get('contra'))

	fetch('../../../controladores/login.controlador.php', {
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
				if (data == 'noexiste') {
					Swal.fire({
						icon: 'error',
						title: 'Vuelva a intentarlo',
						text: 'Error en el rut o la contraseña',
					})
				} else {
					if (data == 'existe') {
						window.location = "../vistas/contenidos/home-vistas.php";
					}
				}
			}
		})
})

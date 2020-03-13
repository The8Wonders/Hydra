$('#formAlumno').submit(function(e){
  e.preventDefault();

  var rut = $.trim($("#rut").val());
  var nombre = $.trim($("#nombre").val());
  var apellido = $.trim($("#apellido").val());
  var email = $.trim($("#email").val());
  var telefono = $.trim($("#telefono").val());
  var contraseña = $.trim($("#contraseña").val());
  var contraseña2 = $.trim($("#contraseña2").val());
  var rol = $.trim($("#rol").val());

  if(rut.length == "" || nombre.length == "" || apellido.length == "" || email.length == "" || telefono.length == "" || contraseña.length == "" || contraseña2.length == "" || rol.length == ""){
    Swal.fire({
      icon: 'error',
      title: 'Campos incompletos',
      text: 'Debe rellenar todos los campos',
    })

    return false;
  }else{
    $.ajax({
      url:"../controladores/alumno.controlador.php",
      type: "POST",
      datatype: "json",
      data: {rut:rut, nombre:nombre, apellido:apellido, email:email, telefono:telefono, contraseña:contraseña, contraseña2:contraseña2, rol:rol},
      succes:function(data){
        if(data == "null"){
          Swal.fire({
            icon: 'error',
            title: 'Alumno',
            text: 'Debe rellenar todos los campos',
          });
        }else{
          Swal.fire({
            icon: 'success',
            title:'Alumno',
            text: 'Registrado con exito',
          }).then((result) => {
            if(result.value){
              window.location.href = "../../contenidos/home-vistas.php";
            }
          }
          )
        }
      }
    });
  }

});
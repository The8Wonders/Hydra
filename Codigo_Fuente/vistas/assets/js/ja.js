console.log('Exito');

var formularioJa = document.getElementById('formJa');

formularioJa.addEventListener('submit', function (e) {
  e.preventDefault();
  console.log('Clic guardar')

  var datos = new FormData(formularioJa);

  console.log(datos)
  console.log(datos.get('nombre'))
  console.log(datos.get('rut'))

  fetch('../../../ajax/ja.ajax.php', {
    method: 'POST',
    body: datos
  })
  .then(res => res.json())
  .then(data => {
    console.log(data)
  })

})
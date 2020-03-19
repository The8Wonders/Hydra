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
    console.log(data);
  })
})
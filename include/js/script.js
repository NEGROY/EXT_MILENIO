const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

// ABRE Y CIERRA EL MENU DEL LATERAL
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

/* searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
  })*/

//AGREGA EL MODO OSCURO 
modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo Claro";
    }else{
        modeText.innerText = "Modo Oscuro";
        
    }
});

//DATA TABLE
//----------------DATA TABLE 
/*
$(document).ready(function () {
    $('#table_id').DataTable(
      {
  
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros",
          "zeroRecords": "No se encontraron registros",
          "info": " ",
          "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "infoFiltered": "(filtrado de un total de: _MAX_ registros)",
          "sSearch": "Buscar: ",
          "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Ultimo",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
          },
          "sProcessing": "Procesando...",
        }
      });
  });*/

  //#region FUNCION QUE EVALUA CUANDO CARGA TODOS LOS RECURSOS Y DESAPARECE EL LOADER
$( document ).ready(function() {
  loaderefect(0);
});
//#endregion
function salir() {
  $(location).attr('href', 'index.php');
}
//#region LOADER
//FUNCION PARA EL EFECTO DEL LOADER
function loaderefect(sh) {
  const LOADING = document.querySelector('.loader-container');
  switch (sh) {
    case 1:
      LOADING.classList.remove('loading--hide');
      LOADING.classList.add('loading--show');
      break;
    case 0:
      LOADING.classList.add('loading--hide');
      LOADING.classList.remove('loading--show');
      break;
  }
}
//#endregion

//script para eliminar la session
$("#eliminarsesion").click(function (e) {
  // console.log('ci');
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: '../src/cruds/crud_usuario.php',
    data: { 'condi': 'salir' },
    dataType: 'json',
    beforeSend: function () {
      loaderefect(1);
    },
    success: function (data) {
      loaderefect(0);
      var urlactual = window.location.origin;
      window.location.replace(urlactual + "/MICROSYSTEM");

    },
    error: function (xhr) {
      loaderefect(0);
      Swal.fire({
        icon: 'error',
        title: '¡ERROR!',
        text: 'Codigo de error: ' + xhr.status + ', Información de error: ' + xhr.responseJSON
      });
    },
    complete: function () {
      loaderefect(0);
    },
  });
}); 
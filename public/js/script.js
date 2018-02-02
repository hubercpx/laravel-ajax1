$(document).ready(function(){
  $('#alert').hide();

  $('.btn-delete').click(function(e){
    e.preventDefault(); // no deja que se recarge la pagina
    if(! confirm("¿Está seguro de eliminar?")){ //si en el boton pone que no retorna falso
      return false;
    }
    //video 7 https://www.youtube.com/watch?v=17qSTuwnSZM&index=7&list=PLhCiuvlix-rQauL0rXdutbclGEeTeMLYK minuto 14:00
    var row = $(this).parents('tr'); //se va al padre tr (toda la fila que se va a eliminar)
    var form = $(this).parents('form');
    var url = form.attr('action');

    $('#alert').show(); // hacer aparecer el mensaje de eliminacion correcta

    $.post(url, form.serialize(), function(result){ // form.serialize son los datos del formulario, function(result) es el json que viene desde el controlador
      row.fadeOut();
      $('#products-total').html(result.total); // es el atributo que viene en el json "total"
      $('#alert').html(result.message); // es el atributo que viene en el json "message"      
    }).fail(function(){
      $('#alert').html('Algo salio mal');
    });
  });
});

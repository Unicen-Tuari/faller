  /*function crear_reclamo(){
    var valorS = $('#selectorSectores').val();
    var valorR = $('#reclamo_texto').val();
    var valorF = $('#reclamo_foto').val();
    $.ajax({
    url: 'index.php?action=reclamoNuevo',
    dataType: 'text',
    data: { selector : valorS,
            reclamo  : valorR,
            foto     : valorF
          },
    type: "POST",
    success: function(data) {
      $('#div_tabla_peticiones').html(data);
    }
   
    });
    return false;
    
  }
*/


/*
$('#formciudad').submit( function(e) {
  $.ajax( {
    url: "AM_ciudad.php",
    type: "POST",
    data: new FormData( this ),
    processData: false,
    contentType: false
  } );
  success: function(data){
  $(":text").val('');
  swal("Hecho!", "La ciudad se creo exitosamente!", "success")
  e.preventDefault(); 
  }
} );
*/
/*$( '#my-form' )
  .submit( function( e ) {
    $.ajax( {
      url: 'http://host.com/action/',
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false
    } );
    e.preventDefault();
  } );
*/

$("#crear_r").submit(function() 
{
  $.ajax({
    url: 'index.php?action=reclamoNuevo',
    type: "POST",
    data:$("#crear_r").serialize(), 
   success: function(data) {
    $("#reclamo_texto").val('');
    $("#reclamo_selector").val('0');
    $("#reclamo_foto").val('');
    $('#div_tabla_peticiones').html(data);
      
    }

  });
  return false;
});
/*

  function crear_reclamo(){
    var valorS = $('#selectorSectores').val();
    var valorR = $('#reclamo_texto').val();
    var valorF = $('#reclamo_foto').val();
    $.ajax({
    url: 'index.php?action=reclamoNuevo',
    dataType: 'text',
    data: { selector : valorS,
            reclamo  : valorR,
            foto     : valorF
          },
    type: "POST",
    success: function(data) {
      $('#div_tabla_peticiones').html(data);
    }
   
    });
    return false;
    
  }

  */

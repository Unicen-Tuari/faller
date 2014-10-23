

$("#formLogin").submit(function() 
{
  $.ajax({
    url: 'index.php?action=login',
    type: "POST",
    data:$("#formLogin").serialize(), 
success: function(data) {
   // $("#inputEmail").val('');

     $("#inputEmail").val('');
    }

  });
  return false;
});

/*
$('#crear_r').submit( function(e) {
  $.ajax( {
    url: "index.php?action=reclamoNuevo",
    type: "POST",
    data: new FormData( this ),
    processData: false,
    contentType: false,
   success: function(data) {
    $("#reclamo_texto").val('');
    $("#reclamo_selector").val('0');
    $("#reclamo_foto").val('');
    $('#div_tabla_peticiones').html(data);
      
    }
  } );
  $(":text").val('');
  e.preventDefault(); 
} );

*/
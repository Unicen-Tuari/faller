

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
    actualizar_paneles();
  e.preventDefault(); 
} );



function actualizar_paneles(){
  $.ajax( {
    url: "index.php?action=actualizar_paneles",
   success: function(data) {
    $('#div_paneles_informativos').html(data);
      
    }
  } );
}
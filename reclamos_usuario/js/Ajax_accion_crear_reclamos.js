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


$(document).ready(function(){
$("#b-submit").click(function() 
{
  $( "#reclamo_texto" ).animate({
    opacity: 0.25,
    height: "toggle"
  }, 1000, function() {
    // Animation complete.
  }); $( "#reclamo_texto" ).animate({
    opacity: 1,
    height: "toggle"
  }, 1000, function() {
    // Animation complete.
  });

});
});

$( "#clickme" ).click(function() {

});


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

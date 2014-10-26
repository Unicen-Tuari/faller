
$("#form_filtro_reclamos").change(function() 
{

  $.ajax({
    url: 'index.php',
    type: "POST",
    data:$("#form_filtro_reclamos").serialize(), 
   success: function(data) {
      $('#div_tabla_reclamos').html(data);
    }
    
  });
  return false;
});




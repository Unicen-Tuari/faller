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
    type: "GET",
    success: function(data) {
      $('#div_tabla_peticiones').html(data);
    }
   
    });
    
  }





/**/
$("#formLogin").submit(function() 
{
 	$('#Ingresar').modal(hide);//('hide')
  $.ajax({
    url: "index.php",
    type: "POST",
    data:$("#formLogin").serialize(),
   success: function(data) {
   	$('#error_login_div').html(data);
    $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");

    }
  });
  return false;
});


// fichero principal.php

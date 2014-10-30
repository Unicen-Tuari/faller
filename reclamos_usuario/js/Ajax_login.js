


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





/**/
$("#formLogin").submit(function() 
{
  
  $.ajax({
    url: "index.php",
    type: "POST",
    data:$("#formLogin").serialize(),
   success: function(data) {
    if(data == '<p id="error_login_p">Error,verifique que la contraseña y el email ingresados sean los correctos. </p>')
      $('#error_login_div').html(data);
   else{
//cierro el modal
//reemplazo todo el html de la ágina con data.
      alert(data);
   }}
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");

    }
  });
  return false;
});


// fichero principal.php



/**/
$("#formLogin").submit(function() 
{
  
  $.ajax({
    url: "index.php",
    type: "POST",
    data:$("#formLogin").serialize(),
   success: function(data) {
    if(data == '<p id="error_login_p">Error,verifique que la contraseña y el email ingresados sean los correctos. </p>')
      $('#error_login_div').html(data);
   else{
//cierro el modal
//reemplazo todo el html de la ágina con data.
    $('#error_login_div').html(data);
        $('#Ingresar').modal('hide');//('hide')

   }}
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");

    }
  });
  return false;
});

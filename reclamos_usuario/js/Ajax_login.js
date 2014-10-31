


/*
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


/*
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
      alert(data);
   }}
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");

    }
  });
  return false;
});
*/

// fichero principal.php




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
   $(location).attr('href','index.php?action=home');  
         // $('#Ingresar').modal('hide');
   
   }
   }
 })
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");
return false;
    });
  

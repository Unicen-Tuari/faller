$("#formLogin2").submit(function() 
{
  $.ajax({
    url: "index.php",
    type: "POST",
    dataType: 'JSON',
    data:$("#formLogin2").serialize(),
   success: function(data) {
      if(data.user_exists == true){
            $(location).attr('href','index.php?action=home');
      }
      else
         if(data.user_Desactivado == true)
          {
           $('#error_login_div').html("<h4>Error, aun no ha sido dado de alta por el administrador del sector.</h4>");
          }
          else{
                 $('#error_login_div').html("<p>Error, verifique su nombre, sector e ingrese nuevamente la contraseña.</p>");
                }
   }
 })
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");
return false;
    });
  

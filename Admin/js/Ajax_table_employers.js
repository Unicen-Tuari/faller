/*
$("#Baja_alta_employ").submit(function() 
{
  $.ajax({
    url: 'index.php',
    type: "POST",
      data:$("#Baja_alta_employ").serialize(),
   success: function(data) {
      $('#div_table_employers').html(data);
    }
    
  });
  return false;
});


$("#formLogin").submit(function() 
{
  $.ajax({
    url: "index.php",
    type: "POST",
    dataType: 'JSON',
    data:$("#formLogin").serialize(),
   success: function(data) {
      if(data.user_exists == false){

      }
      else{
        $(location).attr('href','index.php?action=home');

      }
   }
 })
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");
return false;
    });
  

*/

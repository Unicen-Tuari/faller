


$("#formLoginEmail").submit(function() 
{

  $.ajax({
    url: "index.php",
    type: "POST",
    dataType: 'JSON',
    data:$("#formLoginEmail").serialize(),
   success: function(data) {
      if(data.respuesta_ajax == false){
        $('#error_login_div').html(data.html);
      }
      else{
        var id=$(#id_claim_email).value;
        $(location).attr("href",'index.php?action=claim_spesific&claims_by_email='+id);
 /*if(data == '<p id="error_login_p">Error,verifique que la contraseña y el email ingresados sean los correctos. </p>')
      $('#error_login_div').html(data);
   else{
   $(location).attr('href','index.php?action=home');  
         // $('#Ingresar').modal('hide');
   */
      }
   }
 })
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");
return false;
    });
  

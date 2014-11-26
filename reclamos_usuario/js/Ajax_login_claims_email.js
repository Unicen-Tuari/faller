


$("#formLoginEmail").submit(function() 
{
     //var id=$("#id_claim_e").val();
     // alert(id);
  $.ajax({
    url: "index.php",
    type: "GET",
    dataType: 'JSON',
    data:$("#formLoginEmail").serialize(),
   success: function(data) {
      if(data.retorna_reclamo == true)
      {
              var id    = $("#id_claim_e").val();
              var email = $("#id_person_of_reclaim").val();
              $(location).attr("href",'index.php?action=claim_spesific&claims_by_email='+id);
       }
       else
          if(data.retorna_home == true)
          {

           $(location).attr('href','index.php?action=home');

           }else{

                  $('#error_login_div').html(data.html);
            }
   }
 })
  //  $('#error_login_div').text("Error,verifique que la contraseña y el email ingresados sean los correctos.");
return false;
    });
  

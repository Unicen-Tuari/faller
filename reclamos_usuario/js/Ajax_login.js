
$("#formLogin").submit(function() 
{
  $.ajax({
    url: "index.php",
    type: "POST",
    data:$("#formLogin").serialize(),
   success: function(data) {
    $('#error_login_div').html(data);
      
    }

  });


  return false;
});


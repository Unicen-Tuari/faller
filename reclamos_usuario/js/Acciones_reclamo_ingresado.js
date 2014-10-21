

/****************Boton borrar. text area del reclamo ingresado********************************/
$(document).ready(function(){
$("#b-borrar_txt").click(function() {
if (confirm("Esta seguro que desea borrar todo el texto ingresado."))
{
$("#reclamo_texto").val('');
}

  
});
});

/****************FIN DE Boton borrar. text area del reclamo ingresado********************************/


/********** foto del reclamo***************/
$(document).ready(function(){
$("#reclamo_foto").click(function() {
    $("#reclamo_texto").css( "width", "58.7em" ); //achica el text-area
     $("#div_f").css( "display", "" ); //vizualiza el div que contiene la foto y el detalle de foto
    $("#reclamo_texto").css( "float", "right" );//mueve el div hacia la derecha que automaticamente se encaja al lado del text-area que se achico anteriormente
     $("#b-borrar_img").css( "display", "" ); // vizualizo el boton borrar imagen
  

});
});

function archivo(evt) {//funcion para tomar los datos del input file
      var files = evt.target.files; // FileList object
       
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("div_foto_ingresada").innerHTML = ['<img id="foto_ingresada" class="img-thumbnail" style="width: 198px; height: 165px;" class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                      document.getElementById("div_modal_foto_ingresada").innerHTML = ['<img id="foto_ingresada" class="img-thumbnail"  class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');

               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
document.getElementById('reclamo_foto').addEventListener('change', archivo, false);


/********** foto del reclamo***************/

/********Boton que borra imagen y reestablese los valores del text-area************/
$(document).ready(function(){
$("#b-borrar_img").click(function() {
    $("#foto_ingresada").toggle(2000).fadeOut(6000, function(){
     $("#reclamo_texto").css( "width", "")
     $("#div_f").css( "display", "none" ); 
     $("#reclamo_texto").css( "-webkit-transition", "width 2s");
      $("#reclamo_texto").css( "transition", "width 2s" ); 
    $("#reclamo_texto").css( "float", "none" );
    $("#b-borrar_img").css( "display", "none" ); 
});
});

});




/********************funcion que muestra un detalle de la foto****************************/
      jQuery(document).ready(function() {
      jQuery(".itemJQuery").bind({
           mouseenter: function() {
                 var self = jQuery(this), billboard = self.data("billboardElement");
                 if(!billboard) {
                       billboard = jQuery(jQuery(".item-billboard", this)[0]);
                       self.data("billboardElement", billboard);
                 }
                 jQuery(billboard).stop().animate({
                       "margin-top": "-172px"
                 });
           },
       
             mouseleave: function() {
                 jQuery(this).data("billboardElement").stop().animate({
                       "margin-top": 0
                 });
           }
      });
});
/********************FIN DE funcion que muestra un detalle de la foto****************************/


/********************EFECTO AL MANDAR EL RECLAMO, sobe el text area****************************/

$(document).ready(function(){
$("#b-submit").click(function() 
{
  $( "#reclamo_texto" ).animate({
    opacity: 0.25,
    height: "toggle"
  }, 1000, function() {
    // Animation complete.
  }); $( "#reclamo_texto" ).animate({
    opacity: 1,
    height: "toggle"
  }, 1000, function() {
    // Animation complete.
  });

});
});


/********************FIN DE EFECTO AL MANDAR EL RECLAMO, sobe el text area****************************/

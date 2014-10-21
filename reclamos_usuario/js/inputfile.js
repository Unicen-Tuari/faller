

$(document).ready(function(){
$("#reclamo_foto").click(function() {
    $("#reclamo_texto").css( "width", "55em" ); 
    $("#reclamo_texto").css( "float", "right" );
     $("#b-borrar_img").css( "display", "" ); 
 

});
});



function archivo(evt) {
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
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
document.getElementById('reclamo_foto').addEventListener('change', archivo, false);

/********Boton que borra imagen y reestablese los valores del text-area************/
$(document).ready(function(){
$("#b-borrar_img").click(function() {
    $("#foto_ingresada").toggle(2000).fadeOut(2010, function(){
     $("#reclamo_texto").css( "width", "")
     $("#reclamo_texto").css( "-webkit-transition", "width 2s");
      $("#reclamo_texto").css( "transition", "width 2s" ); 
    $("#reclamo_texto").css( "float", "none" );
    $("#b-borrar_img").css( "display", "none" ); 
});
});

});



/*

      jQuery(document).ready(function() {
      jQuery(".itemJQuery").bind({
           mouseenter: function() {
                 var self = jQuery(this), billboard = self.data("billboardElement");
                 if(!billboard) {
                       billboard = jQuery(jQuery(".item-billboard", this)[0]);
                       self.data("billboardElement", billboard);
                 }
                 jQuery(billboard).stop().animate({
                       "margin-top": "-240px"
                 });
           },
       
             mouseleave: function() {
                 jQuery(this).data("billboardElement").stop().animate({
                       "margin-top": 0
                 });
           }
      });
});

*/
{include file="header.tpl"}
<body>
  <div class="page-wrapper">
    <header class="header-10">
      <div class="container">
        <div class="row">
          <div class="navbar col-sm-12" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle"></button>
              <a class="brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav pull-left">
                <li class="active"><a href="#about">Acerca de</a></li>
                <li><a href="#bakery">Paquetes</a></li>
                <li><a href="#contacts">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="header-10-sub v-center">
      <div class="background">&nbsp;</div>
      <div>
        <div class="container">
          <div class="hero-unit">
            <h1>Tupar VyT</h1><br>
            <h1>Tu sueño hecho realidad</h1>
          </div>
        </div>
      </div>
      <a class="control-btn fui-arrow-down" href="#"> </a>
      <i class="fa fa-angle-down"></i>
    </section>

    <section class="simple-block" id="about">
      <div class="container">
        <h1>Nuestro servicio</h1>
        <div class="text-block col-sm-10 col-sm-offset-1">
          <div class="row">
            {foreach $Empresa as $empresa name=emp}
            {if $smarty.foreach.emp.iteration == 1}
            <h4>{$empresa.titulo}</h4><br>
            <p>{$empresa.cuerpo}</p>
            {/if} 
            {/foreach}                 
          </div>
        </div>
      </div>
    </section>
    <header class="header-23">
      <div class="mask">&nbsp;</div>
      <div class="popup-video">
      </div>

      <div class="popup-video-1">
      </div>
    </header>
    <section class="video-block">
      <div class="header-23-sub" id="first">
        <div class="background">&nbsp;</div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="hero-unit">
                <a href=""  class="btn-play play"  title=""><span class="fui-play"></span></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="simple-block" id="bakery">
    <div class="container">
      <div class="text-block col-sm-10 col-sm-offset-1">
        <div class="row">
          {foreach $Empresa as $empresa name=emp}
          {if $smarty.foreach.emp.iteration == 2}
          <h1>{$empresa.titulo}</h1>
          <p>{$empresa.cuerpo}</p>
          <ul class="links">
            <li><a href="#h1-bread">Sidney</a></li>
            <li><a href="#h1-pastries">Nueva York</a></li>
            <li><a href="#h1-cafe">Berlin</a></li>
          </ul>
          {/if} 
          {/foreach} 
        </div>
      </div>
    </div>
  </section>
  <section class="content-23 v-center custom-bg bread-section" id="h1-bread">
    <div class="holder v-center">
      <div>
        <div class="container">
          <div class="hero-unit hero-unit-bordered">
            <h1>Sidney</h1>
          </div>
        </div>
      </div>
    </div>
    <a class="control-btn fui-arrow-down" href="#"> </a>
  </section>

  <!-- Ciudades -->
  <section class="custom-crumbs-block custom-block">
    <div class="container">
      <div class="text-block col-sm-10 col-sm-offset-1">
        <div class="row">
          {foreach $Empresa as $empresa name=emp}
          {if $smarty.foreach.emp.iteration == 3}
          <h1>{$empresa.titulo}</h1>
          <p>{$empresa.cuerpo}</p>
          {/if} 
          {/foreach}
        </div>
      </div>
      <div class="items">

        <div class="row">
        
          <div class="col-sm-12">
          <div id="contenido"></div>
            {foreach from=$Ciudades item=ciudad}    
            <div class="col-xs-4">
              <div class="photo"><img src="{$ciudad.path}" width="300" height="186"></div>
              <div class="item info"><br>
                <div class="name">{$ciudad.nombre_ciudad}<br><br>
                  <a class="btn btn-primary btn-lg" 
                  href="javascript:getDetalleCiudad({$ciudad.id_ciudad})">Ver detalle</a>
                </div>
              </div>
            </div>   
            {/foreach}      
          </div>
        </div>       

        <a class="show_more" href="#">Ver mas</a>    
        <!-- Aca iria el hidden box -->
        <!-- Aca iria el hidden box -->

      </div>

    </div>
  </div>

  <!-- Modal -->




  <!-- Modal -->
  <!--/.container-->
</section>

<!-- Ciudades -->

<section class="content-23 v-center custom-bg pastries-section" id="h1-pastries">
  <div class="holder v-center">
    <div>
      <div class="container">
        <div class="hero-unit hero-unit-bordered">
          <h1>Nueva York</h1>
        </div>
      </div>
    </div>
  </div>
  <a class="control-btn fui-arrow-down" href="#"> </a>
</section>
<section class="custom-crumbs-block">
  <div class="container">
    <div class="row">
      {foreach $Empresa as $empresa name=emp}
      {if $smarty.foreach.emp.iteration == 4}
      <div class="text-block col-sm-10 col-sm-offset-1">
       <h1>{$empresa.titulo}</h1><br>
       <p>{$empresa.cuerpo}</p>
     </div>
     {/if} 
     {/foreach}
   </div>

 </div>
 <!--/.container-->
</section>

<section class="content-23 v-center custom-bg cafe-section" id="h1-cafe">
  <div class="holder v-center">
    <div>
      <div class="container">
        <div class="hero-unit hero-unit-bordered">
          <h1>Berlin</h1>
        </div>
      </div>
    </div>
  </div>
  <a class="control-btn fui-arrow-down" href="#"> </a>
</section>
<section class="custom-crumbs-block">
  <div class="container">
    <div class="text-block col-sm-10 col-sm-offset-1">
      <div class="row">
        {foreach $Empresa as $empresa name=emp}
        {if $smarty.foreach.emp.iteration == 5}
        <h1>{$empresa.titulo}</h1>
        <p>{$empresa.cuerpo}</p>
        {/if} 
        {/foreach}  
      </div>
    </div>

  </div>

  <!--/.container-->
</section>

<section class="simple-block contacts" id="contacts">
  <div class="container">
    <div class="text-block col-lg-12">

      <h1>Estaríamos encantados de proporcionarle con más información , sólo tiene que llamar , correo electrónico o visítenos</h1>

      <div class="row">

        <div class"contact-block col-lg-12">
          <form class="form-horizontal" method="POST">
            <fieldset>
              <legend >Envienos su consulta</legend><br>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Asunto</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Asunto" name="pass">
                </div>
              </div>
              <div class="form-group">
               <label for="inputText" class="col-lg-2 control-label">Mensaje</label>
               <div class="col-lg-10  control-label">
                <textarea class="form-control" rows="8" type="text" name="texto" placeholder="Escriba su mensaje"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>

    </div>         
  </div>
</section>
{include file="footer.tpl"}
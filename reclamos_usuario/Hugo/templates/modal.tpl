      <div class="modal-content">
        <div class="header">
          <h3>Berlin</h3>
        </div>
        <div class="copy">
          <div class="row">
            <div class="col-sm-4">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/amsterdam2.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/amsterdam3.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/amsterdam.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>
            {foreach from=$Ciudad item=ciudad}
            <div class="col-sm- text-center">
              <p>Lugar:{$ciudad.nombre_ciudad}</p><br>
              <p>Precio:{$ciudad.precio}</p><br>
              <p>Duracion:{$ciudad.duracion}</p><br>
            </div>
            {/foreach}


          </div><hr><hr>
          <div class="row">
            <div class="col-sm-12">
              <a href=""><p class="text-center">Ver comentarios</p></a>

              <address>
                <strong>Comentarios(12):</strong><br>
                <div class="jumbotron"><strong><u>Hugo (Soltero) dijo:</u></strong><br>
                  • EL lugar estuvo increible !</div>
                  <div class="jumbotron"><strong><u>Maria (Luna de miel) dijo:</u></strong><br>
                    • EL lugar estuvo increible !</div>                                
                    <strong>Maria (Luna de miel) dijo:</strong><br>
                    • EL lugar estuvo increible !<hr>
                  </address>

                </div>
              </div>
            </div>
            <div class="cf footer">
            <a href="">Cerrar</a>              
            </div>
          </div>
          <div class="overlay"></div>
<?php

include_once('funciones.php');

    if($_SESSION) {
        $username = $_SESSION['email'];
    }
?>  

<html>
    <?php
include 'head.php'
?>
<body style="background-image:url(fondo.jpg);background-attachment: fixed;">
<?php
include 'navbar.php'
?>


              <!--- BARRA DE NAVEGACION --->
<!---CONTENEDER--->
<div class="container-fluid">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slider/slider1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/slider2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/slider3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<div class="border-bottom border-warning">

</div> --->




<!---IMAGEN-UNO--->




<div class="container-fluid my-5">
<div class="row mb-4">
    <div class="col-lg-3 col-md-3 col-ms-3 text-center">
      <div class="fondo-compra py-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h2>@Tito</h2>
      <p></p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
  </div>
    <div class="col-lg-3 col-md-3 col-ms-3 text-center">
      <div class="fondo-compra py-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h2>@Jorge</h2>
      <p></p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
  </div>
    <div class="col-lg-3 col-md-3 col-ms-3 text-center">
      <div class="fondo-compra py-3 ">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h2>@Tatuman</h2>
      <p></p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
  </div>
    <div class="col-lg-3 col-md-3 col-ms-3 text-center">
      <div class="fondo-compra py-3">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      <h2>@Tatuman</h2>
      <p></p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
  </div>
  </div>
</div>
</div>
</div>
 <!---IMAGEN-UNO--->




   
   <div class="container" >
        <div class="card-columns" id="galeria">
    <script>
        var imagenes=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
        var galeria=document.getElementById("galeria");
        for(imagen of imagenes){
                               galeria.innerHTML +=`  
            <a href="#" data-toggle="modal" data-target="#id${imagen}">
                    <img src="imgprueba/${imagen}.jfif " alt="" width="20%" class="card-img-top mx-2 my-2 border">
            </a>
            <div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <button type="button" class="close mr-2"  data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                       </button>  
            <div class="modal-dialog modal-mg modal-dialog-centered" role="document">
                       <img src="imgprueba/${imagen}.jfif" alt="" class="img-fluid rounded"> 
                   </div>
          </div>`
    }
    </script>
 </div>
</div>




   <!---LINEA DIVISORA--->



   <div class="border-bottom  border-warning" >
      
    </div>

    <!---LINEA DIVISORA--->


  
   


    <!---CONTENIDO-DOS--->



</div>

  <div class="jumbotron text-center img-fluid">
    <div class="container">
      <h1>Tattos</h1>
      <p class="lead text-muted">En esta seccion vas a poder mirar los diferentes modelos disponibles para vos!.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Categorias</a>
        
      </p>
    </div>
  </div>

  <div class="py-5">
    <div class="container text-center">

      <div class="row">
        <div class="col-lg-4 col-md-4 ">
          <div class="card mb-4 shadow-sm">
            <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo1-1.jpg">
            </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo2-2.jpg">
              </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          
          <div class="card mb-4 shadow-sm">
            <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo3.jpg">
          </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">

            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo4.jpg">
            </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo5.jpg">
              </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo6.jpg">
              </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
            <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo7.jpg">
              </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
              <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo8.jpg">
              </div>
            <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card mb-4 shadow-sm">
              <div class="mx-2 my-2">
              <img class="bd-placeholder-img card-img-top border" width="100%" height="225" src="img/modelo/modelo9.jpg">
              </div>
             <div class="card-body">
              <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.  </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><i class="icon ion-md-cart btn-outline-secondary"></i></button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
   

        </div>
        </div>
        
</div>

<div class="row mb-5">
<div class="col-lg-3 mx-auto">
<div class="btn-toolbar mx-auto " role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group text-center mr-2" role="group" aria-label="First group">
    <button type="button" class="btn bg-light btn-outline-secondary">1</button>
    <button type="button" class="btn bg-light btn-outline-secondary">2</button>
    <button type="button" class="btn bg-light btn-outline-secondary">3</button>
    <button type="button" class="btn bg-light btn-outline-secondary">4</button>
    <button type="button" class="btn bg-light btn-outline-secondary">5</button>
    <button type="button" class="btn bg-light btn-outline-secondary">6</button>
    <button type="button" class="btn bg-light btn-outline-secondary">7</button>
    <button type="button" class="btn bg-light btn-outline-secondary">8</button>
  </div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="container-fluid-footer pt-2">
          <!-- Links -->
<div>
          <ul class="nav justify-content-center font-weight-light mb-3">
              <li class="nav-item">
                  <a class="nav-link text-white" href="index.html">Inicio</a>
                </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Condiciones de Uso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Politicas y Servicios</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link text-white" href="preguntas-frecuentes.html">Preguntas Frecuentes</a>
            </li>
          </ul>
        </div>
        <!-- Grid column -->
  

  
    <!--REDES SOCIALES -->
    <div>
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a href="https://facebook.com"  target='_blank'class="btn-floating btn-fb mx-1">
          <i class="icon ion-logo-facebook"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="btn-floating btn-tw mx-1">
          <i class="icon ion-logo-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="btn-floating btn-gplus mx-1">
          <i class="icon ion-logo-googleplus"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#"class="btn-floating btn-li mx-1">
          <i class="icon ion-logo-linkedin"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="btn-floating btn-dribbble mx-1">
          <i class="icon ion-logo-dribbble"> </i>
        </a>
      </li>
    </ul>
    </div>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:Body Art
      
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
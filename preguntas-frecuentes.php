<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/style.css">
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Pagina Web | Proyecto</title>
  </head>
  <body style="background-image:url(fondo.jpg);background-attachment: fixed;">
        <!--- BARRA DE NAVEGACION   --->
        <?php
include 'navbar.php'
?> 
                  <div class="container-fluid py-3">
                      <div class="container  border py-3">

                        

                        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Sobre Nosotros
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h2>¿Quienes somos?</h2>
        <p> Somos un pequeño grupo de tatuadores oriundo de Lanus, nuestro objetivo es fianzar el vinculo entre nosotros y nuestro cliente.</p>
        <h2>¿Por que Body Art?</h2>
        <p>La tegnologia avanza dia a dia , y no nos podiamos quedar atras.Con Body Art podras elegir tu proximo tatto , negociar el costo y solicitar turno con tu tatuador desde la computadora o dispositivo movil.</p>


         </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Registrate
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <h2>¿Quienes pueden registarse?</h2>
        <p>pueden registarse todas las personas que dessen ingresar al mundo del tatto. Si ya sos tatuador, comparti tus experiencias con la comunidad. Si sos tattofan vas a encontrar tu proximo tatto.</p>
        <h2>¿Tiene algun costo registrarse en Body Art?</h2>
        <p>Para nada, registrarse es totalmente gratis.</p>
        <h2>Como me registro?</h2>
        <p>Es facil y rapido, solo tenes que hacerlo una vez, haz click en la parte superior de la pagina en donde dice Registrate.</p>


         </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Antes de tatuarte
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
    <h2>  ¿Que debo saber antes de tatuarme?</h2>
<p>hey tranquilo, el tatuador quitara todas tus dudas que tengas.</p>
<h2>¿Y como contacto con el tatuador?</h2>
<p>cada diseño tiene el perfil del tatuador en el cual podras contactarte con el.</p>
      </div>
    </div>
  </div>
</div>
                      </div>


                  </div>
<!-- Footer -->
<footer class="container-fluid-footer pt-2">
    <!-- Links -->
    <ul class="nav justify-content-center font-weight-light text-center mb-3">
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




<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
<li class="list-inline-item">
  <a href="https://facebook.com"  target='_blank'class="btn-floating btn-fb mx-1">
    <i class="icon ion-logo-facebook"> </i>
  </a>
</li>
<li class="list-inline-item">
  <a href="https://twitter.com" target="_blank" class="btn-floating btn-tw mx-1">
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
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright Body Art

</div>
<!-- Copyright -->
</footer>

                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
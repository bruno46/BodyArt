<?php
    include_once('funciones.php');

    if($_POST) {
        // 1 - buscar usuario por mail
        $usuario = buscamePorEmail($_POST['email']);
        if($usuario !== null) {
            if(password_verify($_POST['password'], $usuario['password']) === true) {
                login($usuario);
            }
        }
        // SI mi controlador de login devuelve true, es porque el usuario ingresa con una cookie o con una
        // session ya iniciada en el sistema, no quiero que vea el form de login
        if(loginController()) {
            header('Location: perfil.php');
            // Lo derivo a su perfil y corto la ejecucion de codigo.
            exit;
        }
    }
?> 

<!DOCTYPE html>
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
  <!---BARRA DE NAVEGACION--->
  <?php
        include('navbar.php')
        ?>
 <!---BARRA DE NAVEGACION--->
  <!---INICIAR SESION--->
<div class="container-fluid px-auto pb-5 ">
        <div class="container pt-5 pb-5 ">
        <?php if(loginController()): ?>
            <div class="alert alert-danger" role="alert">
               Ya estas conectado, por favor <a href="index.php" class="alert-link">volver al inicio</a>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-6 mx-auto py-3 px-3 fondo-imagen">
                <div class="signup-form ">
                    
                     <form role="form" id="register-form" autocomplete="off" method="post">
                     <div class="form-header">
                      <h3 class="form-title text-center text-white mb-3"><i class="icon ion-md-contact"></i> Iniciar Sesion</h3>
                                  
                     <div class="pull-right">
                         <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                     </div>
                                  
                     </div>
                     
                     <div class="form-body">
                                  
                        <div class="form-group">
                               <div class="input-group">
                               <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                               <input name="email" type="text" class="form-control" value="" placeholder="Email">
                               </div>
                               <span class="help-block" id="error"></span>
                          </div>
                               <div class="form-group ">
                                    <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input name="password" id="password" type="password" class="form-control mb-3" placeholder="Contraseña">
                                    </div>  
                                    <span class="help-block" id="error"></span> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                          Recordar Contraseña
                                        </label>
                                      </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 ">
                                        <span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion!
                                        </button>  
                                        <p class="mt-1 d-flex justify-content-between">
                                          <a href="#">¿Has olvidado tu contraseña?</a>* 
                                          <a href="registro.php">¿No tienes una cuenta?Registrate!</a></p>                
                               </div>
                               
                         </div>      
                        </div>
                        
                        
            </div>
                </div>
                        
                    
                    </div>
            </div>
             </div>


</div>
 <!---INICIAR SESION--->
<!-- Footer -->
<footer class="container-fluid-footer pt-4">
    <!-- Links -->
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Politicas y Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Condiciones de uso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="preguntas-frecuentes.html">Preguntas Frecuentes</a>
      </li>
      
    </ul>
   <!---Links--->
<!-- Redes Sociales -->
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
<!-- REDES SOCIALES -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright Body Art

</div>
<!-- Copyright -->

</footer>
<!-- Footer -->




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
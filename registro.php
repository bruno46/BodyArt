<?php
include_once('funciones.php');
if ($_POST){ 

$errores = validate($_POST);
 



if(count($errores) == 0) {
  $usuario = createUser($_POST);

  $erroresAvatar = saveAvatar($usuario);
  
  $errores = array_merge($errores, $erroresAvatar);

if(count($errores) == 0) {
  saveUser($usuario);
  header('Location: iniciar-sesion.php');
  exit;
}
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
        <?php
        include('navbar.php')
        ?>

                    <!---Registro--->
<!---INICIAR SESION--->
<div class="container-fluid px-auto pb-5 ">
    <div class="container pt-5 pb-5 ">
      <?php if(loginController()): ?>
        <div class="alert alert-danger" role="alert">
               Ya estas registrado, por favor <a href="index.php" class="alert-link">volver al inicio</a>
        </div>
      <?php endif; ?>
<?php if(isset($errores)):?>
  <?php foreach($errores as $error):?>
<div class="alert alert-danger"><?=$error ?></div>
<?php endforeach;?>
<?php endif;?>
<div class="row">
  <div class="col-lg-6 mx-auto py-3 px-3 fondo-imagen">
    <div class="signup-form">
      <div class="form-header">
        <h3 class="form-title text-center text-white mb-3"><i class="icon ion-md-contact"></i> Registro</h3>
          <form role="form" id="register-form"  autocomplete="off" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="form-group">
              <div class="input-group">
                <input name="name" type="text" class="form-control mb-3" placeholder="Nombre" value="<?=!isset($errores['name']) ? old('name') : "" ?>">
              </div>
                <span class="help-block" id="error"></span>
              <div class="input-group">
                  <input name="username" type="text" class="form-control mb-3" placeholder="Usuario" value="<?=!isset($errores['username']) ? old('username') : "" ?>">
                    <span class="help-block" id="error"></span>
              </div>
              <div class="input-group">
                  <input name="email" type="text" class="form-control mb-3" placeholder="Ejemplo@hotmail.com" value="<?=!isset($errores['email']) ? old('email') : "" ?>">
              </div> 
                  <span class="help-block" id="error"></span>                     
              <div class="input-group">
                  <input name="password" id="password" type="password" class="form-control" value="" placeholder="Contraseña">
              </div>  
                  <span class="help-block" id="error"></span>                    
              </div>
              <div class="input-group">
                  <input name="cpassword" type="password" class="form-control"  placeholder="Repetir contraseña">
              </div>  
                  <span class="help-block" id="error"></span>                    
              </div>
              </div>
                <br>
              <div class="input-group">
                  <input type="file" name="avatar" class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
              </div>
                  <span class="help-block" id="error"></span>     
                      <br>
              <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox"   name="confirm" id="defaultCheck1" value="<?=!isset($errores['confirm']) ? old('confirm') : "" ?>">
                    <label class="form-check-label" for="defaultCheck1">
                     Acepto los terminos de uso y politicas de seguridad
                    </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                     Recibe correos ocasionales de promociones
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 ">
                  <span class="glyphicon glyphicon-log-in"></span> Registrate!
                </button>  
            </div> 
       </div>
   </div>          
</div>
<?php if(isset($_SESSION['email'])): ?>
<?php endif;?>

<!-- Footer -->
<footer class="container-fluid-footer pt-4">
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Condiciones de uso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Politicas y Servicios</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="preguntas-frecuentes.php">Preguntas Frecuentes</a>
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
<!-- Copyright -->
 <div class="footer-copyright text-center py-3">© 2018 Copyright Body Art
 </div>
</footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
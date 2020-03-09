<?php
include_once('soporte.php');

$name="";
$username="";
$email="";
if($auth->loginController()) {
  header("location: inicio.php");
          exit;
}
if ($_POST){ 

    $errores = $validador->validarInformacion($_POST);
    $name = $_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];

      if(count($errores) == 0) {
          $usuario = new Usuario(NULL,$_POST['name'],$_POST['username'], $_POST['email'], $_POST['password']);

          $usuario->guardarImagen();

          $db->guardarUsuario($usuario);

    
      }
}


  include 'head.php';
 include 'navbar.php'; 
 ?>

                    <!---Registro--->
<!---INICIAR SESION--->
<div class="container-fluid px-auto pb-5 ">
    <div class="container pt-5 pb-5 ">
      <?php if($auth->loginController()): ?>
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
          <form role="form" id="register-form" action="registro.php" autocomplete="off" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="form-group">
              <div class="input-group">
                <input name="name" type="text" class="form-control mb-3" placeholder="Nombre" value="<?=$name/*!isset($errores['name']) ? old('name') : "" */ ?>">
              </div>
                <span class="help-block" id="error"></span>
              <div class="input-group">
                  <input name="username" type="text" class="form-control mb-3" placeholder="Usuario" value="<?=$username/*!isset($errores['username']) ? old('username') : "" */?>">
                    <span class="help-block" id="error"></span>
              </div>
              <div class="input-group">
                  <input name="email" type="text" class="form-control mb-3" placeholder="Ejemplo@hotmail.com" value="<?=$email/*!isset($errores['email']) ? old('email') : "" */?>">
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
                  <input class="form-check-input" type="checkbox"   name="confirm" id="defaultCheck1" value="">
                  <?php //!isset($errores['confirm']) ? old('confirm') : "" ?>
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

<?php include 'footer.php'?>
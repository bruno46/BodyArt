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

<?php include 'head.php' ?>

  <?php include('navbar.php')  ?>
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
                               <input name="email" type="text" class="form-control" value="<?=!isset($errores['email']) ? old('email') : "" ?>" placeholder="Email">
                            </div>
                          <span class="help-block" id="error"></span>
                      </div>
                      <div class="form-group ">
                        <div class="input-group">
                           <div class="input-group-addon">
                              <span class="glyphicon glyphicon-lock"></span>
                            </div>
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
<?php include 'footer.php'?>
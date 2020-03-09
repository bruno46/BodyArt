<?php
     include_once('soporte.php');

     // Generando el perfil dinamicamente!
     // SI hay $_SESSION:
    
     if($auth->loginController()) {
         // 1 - Necesito traer el usuario y asignarlo a una variable, por suerte ya tengo una funcion de antes!
         $usuarios = $db->traerPorMail($_SESSION["email"]);
         foreach($usuarios as $usuario){
           $username = $usuario['email'];
        }
         //$username = $usuario['email'];
         // 2 - Por como arme la subida del avatar, necesito su ID por separado
         // 3 - Dentro de la funcion glob() (http://php.net/manual/es/function.glob.php)
         // concateno la carpeta img al nombre que se genera por default con la subida de las imagenes
         // y un * para que de igual la extension
         if (isset(glob("perfil/$username.*")[0])) {
             //Este if se ejecuta si esta seteado el indice 0. Es la unica manera de no recibir error
             // a la hora de verificar esto.
             $archivo = glob("perfil/$username.*")[0];
         } else {
             $archivo = null;
         }
       
         }
     
 //var_dump($_SESSION);
 //var_dump($usuarios);

?>  
<?php include 'head.php'?>
  
    
        
            <?php include('navbar.php'); ?>
            <?php //SI EL CONTROLLER DE LOGIN DA FALSE, MUESTRO EL SIGUIENTE BLOQUE ?>
            <?php if(!$auth->loginController()): ?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="registro.php" class="alert-link">Registrate!</a>
            </div>
            <?php endif; 
            // SI PASA, NO LO MUESTRO Y POR EL CONTRARIO, LE MUESTRO SU PERFIL!
            ?>
            <div class="container my-2">
            <div class="row">
            
                <div class="card col-4">
                <?php if(isset($archivo)):
                    // SI hay archivo, mostramelo
                ?>
                    <img class="card-img-top" src="<?=$archivo ?>" alt="Card image cap">
                <?php else: 
                    // else, mostrame la imagen default
                    ?>
                    <img class="card-img-top" src="img/default.jpg" alt="Card image cap">
                <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                    </div>
                </div>
                <div class="col-8 ">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item text-white">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Proximamente...</div>
                  </div>
                </div>
              </div>
           </div>
           <?php include 'footer.php'?>
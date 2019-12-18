 <!--- BARRA DE NAVEGACION   --->
 <?php
    include_once('funciones.php');

    // Generando el perfil dinamicamente!
    // SI hay $_SESSION:
     
    if($_SESSION) {
        // 1 - Necesito traer el usuario y asignarlo a una variable, por suerte ya tengo una funcion de antes!
        $usuario = buscamePorEmail($_SESSION["email"]);
        $username = $usuario['email'];
        // 2 - Por como arme la subida del avatar, necesito su ID por separado
        $id = $usuario["id"];
        // 3 - Dentro de la funcion glob() (http://php.net/manual/es/function.glob.php)
        // concateno la carpeta img al nombre que se genera por default con la subida de las imagenes
        // y un * para que de igual la extension
        if (isset(glob("perfil/perfil$id.*")[0])) {
            //Este if se ejecuta si esta seteado el indice 0. Es la unica manera de no recibir error
            // a la hora de verificar esto.
            $archivo = glob("perfil/perfil$id.*")[0];
        } else {
            $archivo = null;
        }
        //dd($archivo);
        // como glob() devuelve un array, si no pongo el unico indice que llega, 
        // tira error array to string conversion cuando hago el echo de $archivo
    }

?>  



 <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item my-1 mx-1 " style="width: 70px;">
          <a class="navbar-brand" href="inicio.php">
            <img class="" src="img/logo1.jpg" alt="" width="70px">
          </a>
       </li>
      </ul>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php if(!loginController()): 
            // Aca uso el controller de login para darle dinamica a la navbar.
            // Solo muestro Login y Register a usuarios no autenticados!
        ?>
        <li class="nav-item my-1">
         <form >
          <div class="input-group">
            <input type="search" class="form-control" name="term" placeholder="Buscar">
              <span class="input-group-btn" style="width: 40px;height: 38px;">
                <button type="submit" class="btn btn-secondary" style="height:100%;"> <i class="icon ion-md-search"></i></button>                      
              </span>               
         </form>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white btn btn-secondary mx-1" href="iniciar-sesion.php"><i class="icon ion-md-person"></i> Iniciar Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white btn btn-secondary mx-1" href="registro.php"><i class="icon ion-md-people"></i> Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white btn btn-secondary mx-1" href="preguntas-frecuentes.php"> FAQs</a>
        </li>
      </ul>
      <?php endif;?>
      <?php if(isset($_SESSION['email'])): ?>
      <li class="nav-item my-1">
       <form >
         <div class="input-group">
            <input type="search" class="form-control" name="term" placeholder="Buscar">
            <span class="input-group-btn" style="width: 40px;height: 38px;">
              <button type="submit" class="btn btn-secondary" style="height:100%;"> <i class="icon ion-md-search"></i></button>                      
            </span>               
          </form>
            </li>
           <li class="nav-item ">
            <a class="nav-link text-white btn btn-secondary py-2 mx-1" href="inicio.php"> Inicio</a>
           </li>
           <li class="nav-item dropdown text-white btn  btn-secondary" style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;"> 
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi cuenta</a>
           <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
           <?php if(isset($archivo)):    ?>
            <a class="dropdown-item " href="perfil.php"><img src="<?=$archivo ?>"style="width: 100px;"></a>
          <?php else:   ?>
          <a class="dropdown-item" href="perfil.php"><img src="img/perfil/profile.png" class="text-center" style="width: 100px;">></a>
            <?php endif; ?>
          <a class="dropdown-item" href="perfil.php">Mi perfil</a>
          <a class="dropdown-item" href="preguntas-frecuentes.php">FAQs</a>
          <div class="dropdown-divider"></div>
          <?php if(isset($_SESSION['email'])): ?>
           <a class="dropdown-item" href="logout.php">Salir</a>
          <?php endif;?>
         </div>
         </li>
       <?php endif;?>
    </div>
  </div>
</nav>
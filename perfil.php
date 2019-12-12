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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Pagina Web | Proyecto</title>
  </head>
  <body>
    
        
            <?php include_once('navbar.php'); ?>
            <?php //SI EL CONTROLLER DE LOGIN DA FALSE, MUESTRO EL SIGUIENTE BLOQUE ?>
            <?php if(!loginController()): ?>
            <div class="alert alert-danger" role="alert">
                No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
            </div>
            <?php endif; 
            // SI PASA, NO LO MUESTRO Y POR EL CONTRARIO, LE MUESTRO SU PERFIL!
            ?>
            <div class="container">
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
                        <a href="#" class="btn btn-primary">Codea!</a>
                    </div>
                </div>
                <div class="col-6 offset-1">
                <h2>Estas son las ultimas noticias</h2>
                <?php print getContent();?>
                </div>
            </div>
        </div>
        </div>
    </body>
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
               
  
  </html>

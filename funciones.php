<?php
    session_start();
    


    // Helpers!
    function dd($var)
    {
        echo"<pre>";
        die(var_dump($var));
        echo "</pre>";
    }

    function old($user_input)
    {
        if (isset($_POST["$user_input"])) {
            return $_POST["$user_input"];
        }
    }

   

    function validate($datos)
    {
        $errores = [];

        $name = trim($datos['name']);

        if($username == "") {
            $errores['name'] = "Por favor completar el nombre ";
        } elseif(strlen($username) <= 3 ) {
            $errores['name'] = "El nombre debe tener minimo 4 caracteres";
        }

        $username = trim($datos['username']);

        if($username == "") {
            $errores['username'] = "Por favor completar el nombre de usuario";
        } elseif(strlen($username) <= 3 ) {
            $errores['username'] = "El nombre de usuario debe tener minimo 4 caracteres";
        }

        $email = trim($datos['email']);

        if($datos['email'] == "") {
            $errores['email'] = "Por favor completar el email"; 
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "el email no es valido";
        }

        if($datos['password'] == "") {
            $errores['password'] = "Por favor completar la contraseña";
        } elseif (strlen($datos['password']) <= 5) {
            $errores['password'] = "Minimo 6 caracteres para la contraseña";
        } elseif ($datos['password'] != $datos['cpassword']) {
            $errores['password'] = "Las contraseñas no coinciden";
        }

        if(!isset($datos['confirm'])) {
            $errores['confirm'] = "Por favor acepta los terminos y condiciones";
        }

        return $errores;
    }

    // /Validaciones

    // Registro/Login
    
    function createUser($datos)
    {
        $usuario = [
            'name'=>$datos['name'],
            'username' => $datos['username'],
            'email' => $datos['email'],
            'role' => 1,
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT)
        ];

        $usuario['id'] = idGenerate();

        return $usuario;
    }

    function idGenerate()
    {
        $file = file_get_contents('users.json');

        if($file == ""){
            return 1;
        }
        
        $users = explode(PHP_EOL, $file);
        // El ultimo dato que genera siempre es un PHP_EOL, asi que lo sacamos con array_pop()
        array_pop($users);

        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);

        return $lastUser["id"] + 1;

    }

    function saveUser($usuario) 
    {
        $jsonUser = json_encode($usuario);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    // 1 -Traer TODA la base
    // 2 - Buqueda por email
 
    function traerTodaLaBase()
    {
        $baseJson = file_get_contents('users.json');
        $users = explode(PHP_EOL, $baseJson);
        array_pop($users);

        foreach($users as $user) {
            $arrayUsers[] = json_decode($user, true);
        }
        return $arrayUsers;
    }



    function buscamePorEmail($email)
    {
        $arrayDeUsuariosTraidos = traerTodaLaBase();
        foreach($arrayDeUsuariosTraidos as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }


    function buscamePorUser($username)
    {
        $arrayDeUsuariosTraidos = traerTodaLaBase();
        foreach($arrayDeUsuariosTraidos as $user) {
            if($user['username'] == $username) {
                return $user;
            }
        }
        return null;
    }


    // MANEJO DE SESSION

    // 1- Login

    function login($usuario) {
        $_SESSION["email"] = $usuario["email"];
      setcookie("email", $usuario["email"], time()+3600);
      }

  function loginController()
    {
        if (isset($_SESSION["email"])) {
            return true;
        } else {
            if (isset($_COOKIE["email"])) {
                $_SESSION["email"] = $_COOKIE["email"];
                return true;
            } else {
                return false;
            }
        }
    }

    
    function logout()
    {   
        session_destroy();
        setcookie("email", "", time() -1);
    }


    function saveAvatar($usuario) 
    {

        $errores = [];
        
        $id = $usuario["id"];

        if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {

            $nombre = $_FILES["avatar"]["name"];
            $archivo = $_FILES["avatar"]["tmp_name"];

            $ext = pathinfo($nombre, PATHINFO_EXTENSION);

            if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
                $errores["avatar"] = "Solo acepto formatos jpg y png";
                return $errores;
            }

            $miArchivo = dirname(__FILE__);

            $miArchivo = $miArchivo . "/perfil/";

            $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;

            move_uploaded_file($archivo, $miArchivo);

        } else {

            $errores["avatar"] = "Hubo un error al procesar el archivo";

        }

        return $errores;
    }




























































    









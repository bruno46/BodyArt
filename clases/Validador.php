<?php

class Validador
{
 private $db;

 public function __construct($db){
    $this->db=$db;
  }

 public function validarInformacion($datos) {
		$errores = [];

		foreach ($datos as $clave => $valor) {
			$datos[$clave] = trim($valor);
		}
		//$name = trim($datos->getName());
        if($datos['name'] == "") {
            $errores['name'] = "Por favor completar el nombre ";
        } elseif(strlen($datos['name']) <= 2 ) {
            $errores['name'] = "El nombre debe tener minimo 2 caracteres";
        }
		//$username = trim($datos->getUsername());

        if($datos['username'] == "") {
            $errores['username'] = "Por favor completar el nombre de usuario";
        } elseif(strlen($datos['username']) <= 3 ) {
            $errores['username'] = "El nombre de usuario debe tener minimo 4 caracteres";
        }
		//$email = trim($datos->getEmail());

        if($datos['email'] == "") {
            $errores['email'] = "Por favor completar el email"; 
        } elseif(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "el email no es valido";
		} elseif ($this->db->traerPorMail($datos['email']) != NULL) {
			$errores["email"] = "El mail ya existe!";
		}
		//$password= trim($usuario->getPassword());
        //$cpassword = trim($usuario->getRepassword());
		if($datos['password'] == "") {
            $errores['password'] = "Por favor completar la contraseña";
        } elseif (strlen($datos['password']) <= 5) {
            $errores['password'] = "Minimo 6 caracteres para la contraseña";
        }elseif ($datos['password'] != "" && $datos['cpassword'] != "" && $datos['password'] != $datos['cpassword']) {
			$errores["password"] = "Las contraseñas no coinciden";
		}
		elseif ($datos['cpassword'] == "") {
			$errores["cpassword"] = "No llenaste completar contraseña";
		}
		if(!isset($datos['confirm'])) {
            $errores['confirm'] = "Por favor acepta los terminos y condiciones";
        }
		return $errores;
	}
	function validarLogin(array $datos) {
		$errores = [];

		foreach ($datos as $clave => $valor) {
			$datos[$clave] = trim($valor);
		}

		//$email = trim($datos->getEmail());
		if ($datos['email'] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($datos['email'], FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($datos['email']) == NULL) {
			$errores["email"] = "El usuario no esta en nuestra base";
		}

		$usuario = traerPorMail($email);

		if ($datos['email'] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($datos['email'], $datos['password']) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}
		return $errores;
	}
}




/*class Validador{

    public function validacionUsuario($usuario){
		$errores=array();

	
        
        $nombre = trim($usuario->getName());
        if(isset($nombre)) {
            if(empty($nombre)){
                $errores["nombre"]= "El campo nombre no debe estar vacio";
            }
        }
    
        $email = trim($usuario->getMail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPass());
   
        $cpassword = $password;
        

        if(empty($password)){
            $errores["password"]= "Hermano querido el campo password no lo podés dejar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($cpassword)){
            if ($password != $cpassword) {
                $errores["cpassword"]="Las contraseñas no coinciden";
            }
        }
        
    
        return $errores;
    }
    //Metodo creado para validar el login del usuario
    public function validacionLogin($usuario){
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPass());
       
        if(empty($password)){
            $errores["password"]= "Hermano querido el campo password no lo podés dejar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
    
        return $errores;
    }
    //Método para validar si el usuario desea recuperar su contraseña
    public function validacionOlvide($usuario){
        
        $errores=array();
    
        $email = trim($usuario->getMail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPass());
   
        $cpassword = $password;
        

        if(empty($password)){
            $errores["password"]= "Hermano querido el campo password no lo podés dejar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(empty($cpassword)){
            $errores["cpassword"]= "Hermano querido el campo confirmar nuevo password no lo podés dejar en blanco";
        }
    
        return $errores;
    }


}*/

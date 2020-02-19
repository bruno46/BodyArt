<?php
class Validador
{
 private $db;

 public function __construct($db){
    $this->db=$db;
  }

 public function validarInformacion(array $datos, Db $db) {
		$errores = [];

		foreach ($datos as $clave => $valor) {
			$datos[$clave] = trim($valor);
		}
		$name = trim($datos->getName());
        if($name == "") {
            $errores['name'] = "Por favor completar el nombre ";
        } elseif(strlen($name) <= 2 ) {
            $errores['name'] = "El nombre debe tener minimo 2 caracteres";
        }
		$username = trim($datos->getUsername());

        if($username == "") {
            $errores['username'] = "Por favor completar el nombre de usuario";
        } elseif(strlen($username) <= 3 ) {
            $errores['username'] = "El nombre de usuario debe tener minimo 4 caracteres";
        }
		$email = trim($datos->getEmail());

        if($email == "") {
            $errores['email'] = "Por favor completar el email"; 
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "el email no es valido";
		} elseif ($this->db->traerPorMail($email) != NULL) {
			$errores["email"] = "El mail ya existe!";
		}
		$password= trim($usuario->getPassword());
        $cpassword = trim($usuario->getRepassword());
		if($password == "") {
            $errores['password'] = "Por favor completar la contraseña";
        } elseif (strlen($password) <= 5) {
            $errores['password'] = "Minimo 6 caracteres para la contraseña";
        }elseif ($password != "" && $cpassword != "" && $password != $cpassword) {
			$errores["password"] = "Las contraseñas no coinciden";
		}
		elseif ($cpassword == "") {
			$errores["cpassword"] = "No llenaste completar contraseña";
		}
		if(!isset($datos['confirm'])) {
            $errores['confirm'] = "Por favor acepta los terminos y condiciones";
        }
		return $errores;
	}
	function validarLogin(array $datos, Db $db) {
		$errores = [];

		foreach ($datos as $clave => $valor) {
			$datos[$clave] = trim($valor);
		}

		$email = trim($datos->getEmail());
		if ($email == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "El mail tiene que ser un mail";
		} else if ($this->db->traerPorMail($email) == NULL) {
			$errores["email"] = "El usuario no esta en nuestra base";
		}

		$usuario = traerPorMail($email);

		if ($email == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($email, $password) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}
		return $errores;
	}
}


 ?>

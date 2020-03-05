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
		} else if ($this->db->traerPorMail($datos['email']) == NULL) {
			$errores["email"] = "El usuario no esta en nuestra base";
		}

		$usuario = $this->db->traerPorMail($datos['email']);

		if ($datos['email'] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			 //Tengo que validar que la contraseño que ingreso sea valida
			//
			// ARREGLAR ACA
			//
			//if (password_verify($datos['password'],$usuario["password"]) == false) {
			//	$errores["password"] = "La contraseña no verifica";
			//}
		}
		return $errores;
	}
}

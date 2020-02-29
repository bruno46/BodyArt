<?php

class Auth
{
	public function iniciarSession(){
        if(!isset($_SESSION)){
			session_start();
		}
  }

  function login($usuario) {
	$_SESSION["email"] = $usuario->getMail();
  setcookie("email", $usuario->getMail(), time()+3600);
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
	
}



 ?>

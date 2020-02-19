<?php 


class DbJson extends Db
{
    private $json;
    public function __construct(){
        $this->archivo = '../usuarios.json';
}



    public function saveUser(Usuario $usuario) 
    {
        $jsonUser = json_encode($usuario);
        file_put_contents($this->archivo, $jsonUser . PHP_EOL, FILE_APPEND);
    }

    // 1 -Traer TODA la base
    // 2 - Buqueda por email
 
    function traerTodaLaBase()
    {
        $baseJson = file_get_contents($this->archivo);
        $users = explode(PHP_EOL, $baseJson);
        array_pop($users);

        foreach($users as $user) {
            $arrayUsers[] = json_decode($user, true);
        }
        return $arrayUsers;
    }



    function buscamePorEmail($email)
    {
        $arrayDeUsuariosTraidos = $this->traerTodaLaBase();
        foreach($arrayDeUsuariosTraidos as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }
}

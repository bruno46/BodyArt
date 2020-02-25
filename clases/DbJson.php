<?php 

class DbJson extends Db
{
    private $nombreArchivo;
    public function __construct($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }
    public function getNombreArchivo(){
        return $this->nombreArchivo;
    }
    public function setNombreArchivo($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }

    public function guardarUsuario(Usuario $usuario) 
    {
        $jsonUser = json_encode($usuario);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    // 1 -Traer TODA la base
    // 2 - Buqueda por email
 
    function traerTodos()
    {
        $baseJson = file_get_contents('users.json');
        $users = explode(PHP_EOL, $baseJson);
        array_pop($users);

        foreach($users as $user) {
            $arrayUsers[] = json_decode($user, true);
        }
        return $arrayUsers;
    }

    function traerPorMail($email)
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

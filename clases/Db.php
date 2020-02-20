<?php
abstract class Db
{
  public abstract function guardarUsuario(Usuario $usuario);
  public abstract function traerTodos();
  public abstract function traerPorMail($email);
}

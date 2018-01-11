<?php
namespace Config;

class Db
{
  public static function conexao()
  {
    $conexao = new \PDO("mysql:host=localhost;dbname=phpoo;charset=utf8","root","root");
    //$conexao = new \PDO("mysql:host=localhost;dbname=id3726811_phpoo;charset=utf8","id3726811_usuario123","phpoo123456");
    return $conexao;
  }
}

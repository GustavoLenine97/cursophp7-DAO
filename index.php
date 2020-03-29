<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuário
//$gustavo = new Usuario();
//$gustavo->loadById(3);
//echo $gustavo;

//Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Gu");
//echo json_encode($search);

//Carrega um usuário usando o login e senha
//$usuario = new Usuario();
//$usuario->login("Gustavo","lenine");

//echo $usuario;


/*Alterar um usuário
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("Machado", "machado");

echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

?>
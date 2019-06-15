<?php

require_once("config.php");

//lista somente 1
//$root = new Usuario();
//$root->loadById(4);
//echo $root."<br>";

//lista todos os usuarios da tabela
//$lista = Usuario::listaUsuario();
//echo json_encode($lista);

//Carrega lista buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//busca pelo login e senha
$usuario = new Usuario();
$usuario->login("astolfo","0987651");

echo $usuario;


?>
<?php

require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario ORDER BY idusuario DESC");

echo json_encode($usuarios);

?>
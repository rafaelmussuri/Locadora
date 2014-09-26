<?php
include_once 'classes\Usuario.class.php';
//var_dump($_POST);

$usuario = new Usuario();

$usuario->setLogin($_POST['login']);


if($_POST['senha'] == $_POST['senha2']){
    $usuario->setSenha($_POST['senha']);
}

$usuario->inserirUsuario();

header ('Location : index.php?pagina=formulario_usuario');

?>
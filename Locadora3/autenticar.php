<?php

include_once 'classes\Usuario.class.php';


session_start();

$usuario = new Usuario();

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);

if (NULL != $usuario->buscarUsuario()) {

    $_SESSION['login'] = $usuario->getLogin();
    $_SESSION['senha'] = $usuario->getSenha();
    header('Location:index.php');
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php?pagina=login');
}
?>
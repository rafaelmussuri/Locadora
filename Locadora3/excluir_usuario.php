<?php

include_once 'classes/ConexaoBD.php';
include_once 'classes/Usuario.class.php';

$objCliente = new Usuario();
$objCliente->setIdUsuario($_GET['id']);
$objCliente->excluirUsuario();

header('Location: index.php?pagina=formulario_usuario');
?>
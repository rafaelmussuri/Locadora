<?php
include_once 'classes\ConexaoBD.php';
include_once 'classes/Cliente.class.php';

$objCliente = new Cliente();
$objCliente->idCliente = $_GET['id'];
$objCliente->excluirCliente();

header('Location: index.php?pagina=formulario_clientes');
?>
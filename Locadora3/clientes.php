<?php

include_once 'classes\Cliente.class.php';

var_dump($_POST);

$cliente = new Cliente();

$cliente->idCliente = $_POST['idcliente'];

$cliente->nome = $_POST['nome'];
$cliente->endereco = $_POST['endereco'];
$cliente->telefone = $_POST['telefone'];
$cliente->email = $_POST['email'];
$cliente->cep = $_POST['cep'];
$cliente->nascimento = $_POST['nascimento'];

$cliente->salvarCliente();

header ('Location: index.php?pagina=formulario_clientes');

date ('y-m-d', strtotime($time));

?>
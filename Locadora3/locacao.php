<?php

include_once 'classes\Locacao.class.php';
include_once 'classes\ConexaoBD.php';
var_dump($_POST);

$objLocacao = new Locacao();

$objLocacao->setIdCliente($_POST['idCliente']);
$objLocacao->setIdFilmes($_POST['idFilme']);
$objLocacao->setValorLocacao($_POST['valorLocacao']);
$objLocacao->setLocacao($_POST['locacao']);
$objLocacao->setDevolucao($_POST['devolucao']);

$objLocacao->inserirLocacao();

header('Location: index.php?pagina=formulario_locacao');
?>

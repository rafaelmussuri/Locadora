<?php

include_once 'classes\Filmes.class.php';
include_once 'classes\ConexaoBD.php';

var_dump($_POST);

$objFilme = new Filmes();
$objFilme->titulo = $_POST['titulo'];
$objFilme->genero = $_POST['genero'];
$objFilme->estoque = $_POST['estoque'];
$objFilme->midia = $_POST['midia'];
$objFilme->status = $_POST['status'];

$objFilme->idFilme = $_POST['idfilme'];

//var_dump($objFilme->idFilme);

$objFilme->salvarFilme();

header('Location: index.php?pagina=formulario_filmes');
?>
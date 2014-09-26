<?php
include_once 'classes\ConexaoBD.php';
var_dump($_GET);
include_once 'classes/Filmes.class.php';
$objFilme = new Filmes();
$objFilme->idFilme = $_GET['id'];
$objFilme->excluirFilmes();

header('Location: index.php?pagina=formulario_filmes');
?>
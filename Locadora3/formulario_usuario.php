<?php
include_once 'classes\Usuario.class.php';
/*
$objUsuario = new Usuario();
$listarUsuario = $objUsuario->listarUsuario();

$usuario = null;

if (isset($_GET['idUsuario'])) {
    $objUsuario->idUsuario = $_GET['idUsuario'];
    $usuario = $objUsuario->listarUsuarioId();
}*/
?>

<fieldset>
    <legend><strong>Cadastrar Usuário</strong></legend>
    <form action="usuario.php" method="post">
        <!--<input type="hidden" name="idusuario" value="<?php //echo $usuario['idUsuario'] ?>">-->
        <label>Nome de Login:</label>
        <input type="text" name="login">
        <br>
        <label>Senha: </label>
        <input type="password" name="senha">
        <br>
        <label>Confirme a Senha: </label>
        <input type="password" name="senha2">
        <br>
        <input type="submit" value="enviar">
    </form>
</fieldset>
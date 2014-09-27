<?php
if (isset($_GET['sair'])) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
}
include_once 'css\layout.php';
include_once 'menu.php';
?>


<fieldset class="fie">
    <legend class="legend"><strong>LOGIN</strong></legend>
    <form action="autenticar.php" method="post">
        <label>Usuário:</label>
        <input type="text" name="login">
        <br>
        <label>Senha: </label>
        <input type="password" name="senha">
        <br>
        <input type="submit" name="ENTRAR">
    </form>
</fieldset>
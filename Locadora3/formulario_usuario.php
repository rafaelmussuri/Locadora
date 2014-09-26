<?php
include_once 'classes\Usuario.class.php';

$objUsuario = new Usuario();
$listarUsuario = $objUsuario->listarUsuario();

$usuario = null;

if (isset($_GET['idUsuario'])) {
    $objUsuario->idUsuario = $_GET['idUsuario'];
    $usuario = $objUsuario->listarUsuarioId();
}
?>

<fieldset>
    <legend><strong>Cadastrar Usuário</strong></legend>
    <form action="usuario.php" method="post">
        <input type="hidden" name="idusuario" value="<?php echo $usuario['idUsuario'] ?>">
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

<table border="1">
    <thead>
    <th>Nome de Usuário:</th>
    <th>Ações</th>
</thead>
<tbody>
    <?php foreach ($listarUsuario as $usuario) { ?>
        <tr>
            <td><?php echo $usuario['nome']; ?></td>
            <td><a href="excluir_usuario.php?id=<?php echo $usuario['idUsuario'] ?>">
                    <img src="https://www.netiq.com/documentation/idm402/policy_designer/graphics/icon_delete_n.png"/>
                </a>
            </td>
        </tr>
    <?php } ?>
</tbody>
</table>
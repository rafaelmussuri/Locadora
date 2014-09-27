<?php
include_once 'classes/Cliente.class.php';


if ((!isset($_SESSION['login']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['login'];



$objCliente = new Cliente();
$listaClientes = $objCliente->listarCliente();

$cliente = null;

if (isset($_GET['idCliente'])) {
    $objCliente->idCliente = $_GET['idCliente'];
    $cliente = $objCliente->listarClienteId();
}
?>

<h1>Lista de Clientes</h1>
<fieldset class="fie">
    <legend class="legend"><strong>Cadastrar Clientes</strong></legend>
    <form action="clientes.php" method="post">
        <input type="hidden" name = "idcliente" value="<?php echo $cliente['idCliente'] ?>">

        <label>Nome: </label>
        <input type="text" name="nome" value="<?php echo $cliente['Nome'] ?>">
        <br>

        <label>Endereço: </label>
        <input type="text" name="endereco" value="<?php echo $cliente['Endereco'] ?>">
        <br>

        <label>Telefone: </label>
        <input type="text" name="telefone" value="<?php echo $cliente['Telefone'] ?>">
        <br>

        <label>E-mail: </label>
        <input type="text" name="email" value="<?php echo $cliente['Email'] ?>">
        <br>

        <label>CEP: </label>
        <input type="text" name="cep" value="<?php echo $cliente['Cep'] ?>">
        <br>

        <label>Data de Nascimento: </label>
        <input type="date" name="nascimento" value="<?php echo $cliente['Nascimento'] ?>">
        <br>

        <input type="submit" value="Cadastar">

    </form>
</fieldset>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>CEP</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <!-- In�cio da repeti��o -->
        <?php foreach ($listaClientes as $prod) { ?>
            <tr>
                <td><?php echo $prod['Nome'] ?></td>
                <td><?php echo $prod['Endereco'] ?></td>
                <td><?php echo $prod['Telefone'] ?></td>
                <td><?php echo $prod['Email'] ?></td>
                <td><?php echo $prod['Cep'] ?></td>
                <td><?php echo date('d/m/Y', strtotime($prod['Nascimento'])) ?></td>
                <td>
                    <a href="excluir_cliente.php?id=<?php echo $prod['idCliente'] ?>">
                        <img src="https://www.netiq.com/documentation/idm402/policy_designer/graphics/icon_delete_n.png"/>
                    </a>
                    <a href="index.php?pagina=formulario_clientes&idCliente=<?php echo $prod['idCliente'] ?>">
                        <img src="http://oscardias.com/wp-content/uploads/2012/07/edit.png"/>
                    </a>
                    <a href="index.php?pagina=formulario_locacao&idCliente=<?php echo $prod['idCliente'] ?>">
                        <img src="https://proposta.credifibra.com.br/relacionamento.portal/Shared/Images/LinkButton/AddBookmark.gif"/>
                    </a>
                </td>
            </tr>
        <?php } ?>
        <!-- Fim da repeti��o -->
    </tbody>
</table>

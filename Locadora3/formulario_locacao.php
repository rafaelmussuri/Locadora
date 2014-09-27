<?php
include_once 'classes\Cliente.class.php';
include_once 'classes\Filmes.class.php';
include_once 'classes\Locacao.class.php';


if ((!isset($_SESSION['login']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['login'];


$objCliente = new Cliente();
$listaClientes = $objCliente->listarCliente();


$cliente = NULL;

if (isset($_GET['idCliente'])) {
    $objCliente->idCliente = $_GET['idCliente'];
    $cliente = $objCliente->listarClienteId();
}


$objFilme = new Filmes();
$listaFilmes = $objFilme->listarFilmes();

$objLocacao = new Locacao();
$listaLocacao = $objLocacao->listarLocacao();
?>
<fieldset class="fie">
    <legend class="legend"><strong>Locação de Filmes</strong></legend>
    <form action="locacao.php" method = "post">

        <label>Código do Cliente: </label>
        <input type="text" name="idCliente" value="<?php echo $cliente['idCliente'] ?>">
        <br>
        <label>Nome do Cliente: </label>
        <input type="text" value="<?php echo $cliente['Nome'] ?>">
        <br>

        <label>Titulo do Filme</label>
        <!-- Logica do foreach-->
        <select name="idFilme">
            <option>    </option>
            <?php foreach ($listaFilmes as $tituloFilme) { ?>
                <option value="<?php echo $tituloFilme['idFilme'] ?>"><?php echo $tituloFilme['Titulo'] ?></option>
            <?php } ?>
        </select>
        <br>    
        <label>Valor: </label>
        <input type="text" name="valorLocacao">
        <br>

        <label>Data da Locação: </label>
        <input type="date" name="locacao">
        <br>

        <label>Data da Devolução: </label>
        <input type="date" name="devolucao">
        <br>
        <input type="submit" value="Registrar">
    </form>
</fieldset>

<table border="1">
    <thead>
    <th>Nome do Cliente</th>
    <th>Filme</th>
    <th>Data da Locação</th>
    <th>Data da Devolução</th>
    <th>Valor</th>
</thead>
<tbody>
    <?php foreach ($listaLocacao as $mov) { ?>
        <tr>
            <td><?php echo $mov['Nome'] ?></td>
            <td><?php echo $mov['Titulo'] ?></td>
            <td><?php echo date('d/m/Y', strtotime($mov['dataLocacao'])) ?></td>
            <td><?php echo date('d/m/Y', strtotime($mov['Devolucao'])) ?></td>
            <td><?php echo $mov['Locacao'] ?></td>   
        </tr>
    <?php } ?>
</tbody>
</table>
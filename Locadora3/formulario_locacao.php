<?php
include_once 'classes\Cliente.class.php';
include_once 'classes\Filmes.class.php';
include_once 'classes\Locacao.class.php';

$objCliente = new Cliente();
$listaClientes = $objCliente->listarCliente();

$objFilme = new Filmes();
$listaFilmes = $objFilme->listarFilmes();

$objLocacao = new Locacao();
$listaLocacao = $objLocacao->listarLocacao();


?>
<fieldset>
    <legend>Locação de Filmes</legend>
<form action="locacao.php" method = "post">
    <label>Nome do Cliente: </label>
    <select name="nomeCliente">
        <option>      </option>
        <!-- Logica do foreach-->
        <?php  foreach($listaClientes as $nomeCliente ){?>
        <option value="<?php echo $nomeCliente['idCliente'] ?>"><?php echo $nomeCliente['Nome'] ?></option>
        <?php } ?>
    </select>
    <br>
        
    <label>Titulo do Filme</label>
    <!-- Logica do foreach-->
        <select name="titulo">
            <option>    </option>
            <?php foreach($listaFilmes as $tituloFilme) {?>
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
            <td><?php echo $mov['dataLocacao'] ?></td>
            <td><?php echo $mov['Devolucao'] ?></td>
            <td><?php echo $mov['Locacao'] ?></td>   
        </tr>
        <?php } ?>
    </tbody>
</table>
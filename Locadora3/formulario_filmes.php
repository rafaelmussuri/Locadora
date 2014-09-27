<?php
include_once 'classes/Filmes.class.php';
include_once 'classes/ConexaoBD.php';


if ((!isset($_SESSION['login']) == true) && (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['login'];

$objFilme = new Filmes();
$listaFilmes = $objFilme->listarFilmes();

//var_dump($listaFilmes);

$filme = null;


if (isset($_GET['idFilme'])) {
    $objFilme->idFilme = $_GET['idFilme'];
    $filme = $objFilme->listarFilmesId();
}
?>

<fieldset class="fie">
    <legend class="legend"><strong>Cadastrar Filme</strong></legend>
    <form action="filmes.php" method="post">

        <input type="hidden" name="idfilme" value="<?php echo $filme['idFilme'] ?>">

        <label>Titulo:</label>
        <input type="text" name="titulo" value="<?php echo $filme['Titulo'] ?>">
        <br>

        <label>Genero:</label>
        <select name="genero">
            <option value="ção">Ação</option>
            <option value="comedia">Comedia</option>
            <option value="terror">Terror</option>
            <option value="suspense">Suspense</option>
        </select>
        <br>

        <label>Estoque:</label>
        <input type="number" name="estoque" value="<?php echo $filme['Estoque'] ?>">
        <br>

        <label>Midia:</label><br>
        <input type="radio" name="midia" value="vhs">VHS<br>
        <input type="radio" name="midia" value="dvd">DVD<br>
        <input type="radio" name="midia" value="blu-ray">Blu-Ray<br>
        <br>

        <label>Status:</label>
        <select name="status">
            <option value="disponivel">Disponível</option>
            <option value="indisponivel">Indisponível</option>
        </select>
        <br>

        <input type="submit">
    </form>
</fieldset>

<table border="1">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Estoque</th>
            <th>Midias</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <!-- Início da repetição -->
        <?php foreach ($listaFilmes as $prod) { ?>
            <tr>
                <td><?php echo $prod['Titulo'] ?></td>
                <td><?php echo $prod['Genero'] ?></td>
                <td><?php echo $prod['Estoque'] ?></td>
                <td><?php echo $prod['Midia'] ?></td>
                <td><?php echo $prod['Status'] ?></td>
                <td>
                    <a href="excluir_filme.php?id=<?php echo $prod['idFilme'] ?>">
                        <img src="https://www.netiq.com/documentation/idm402/policy_designer/graphics/icon_delete_n.png"/>
                    </a>
                    <a href="index.php?pagina=formulario_filmes&idFilme=<?php echo $prod['idFilme'] ?>">
                        <img src="http://oscardias.com/wp-content/uploads/2012/07/edit.png"/>
                    </a>
                </td>
            </tr>
        <?php } ?>
        <!-- Fim da repetição -->
    </tbody>
</table>

<style>
#menu ul {
    padding:0px;
    margin:0px;
    background-color:#EDEDED;
    list-style:none;
}

#menu ul li { 
    display: inline; 
}

#menu ul li a {
    padding: 2px 10px;
    display: inline-block;

    /* visual do link */
    background-color:#EDEDED;
    color: #333;
    text-decoration: none;
    border-bottom:3px solid #EDEDED;
}

#menu ul li a:hover {
    background-color:#D6D6D6;
    color: #6D6D6D;
    border-bottom:3px solid #EA0000;
}
</style>

<nav id="menu">
    <ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="index.php?pagina=formulario_filmes">Cadastrar Filme</a></li>
		<li><a href="index.php?pagina=formulario_clientes">Cadastrar Cliente</a></li>
		<li><a href="index.php?pagina=formulario_usuario">Cadastrar Usuário</a></li>
		<li><a href="index.php?pagina=formulario_locacao">Locação de Filmes</a></li>
    </ul>
</nav>
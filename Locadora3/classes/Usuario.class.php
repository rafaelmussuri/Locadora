<?php

include_once 'classes\ConexaoBD.php';

class Usuario {

    private $idUsuario;
    private $login;
    private $senha;

    public function setIdUsuario($id) {
        $this->idUsuario = $id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function inserirUsuario() {

        $sql = "INSERT INTO `locadora`.`usuario` (`nome`, `senha`) 
                        VALUES ('$this->login', '$this->senha');";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarUsuario() {

        $sql = "SELECT * FROM locadora.usuario;";

        return $dados = ConexaoBD::listar($sql);
    }

    public function listarUsuarioId() {


        $sql = "SELECT * FROM locadora.usuario WHERE idUsuario = $this->idUsuario";

        return $dados = ConexaoBD::buscarPorId($sql);
    }

    public function alterarUsuario() {

        $sql = "INSERT INTO `locadora`.`usuario` (`usuario`, `senha`) 
                        VALUES ('$this->login', '$this->senha');";

        return $dados = ConexaoBD::alterar($sql);
    }

    public function excluirUsuario() {

        $sql = "DELETE FROM `locadora`.`usuario` WHERE `idUsuario`='$this->idUsuario';";

        ConexaoBD::excluirBanco($sql);
    }
    
    public function salvarUsuario() {
        if ($this->idUsuario == '') {
            $this->inserirUsuario();
        } else {
            $this->alterarUsuario();
        }
    }

}

?>
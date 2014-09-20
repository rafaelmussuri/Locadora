<?php

class Cliente {

    public $idCliente;
    public $nome;
    public $endereco;
    public $telefone;
    public $email;
    public $cep;
    public $nascimento;

    public function inserirCliente() {
        ConexaoBD::conexao();

        $sql = "INSERT INTO `locadora`.`cliente` (`Nome`, `Endereco`, `Telefone`, `Email`, `Cep`, `Nascimento`) 
VALUES ('$this->nome', '$this->endereco', '$this->telefone', '$this->email', '$this->cep', '$this->nascimento');";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarCliente() {
        ConexaoBD::conexao();

        $sql = "SELECT * FROM locadora.cliente";

        return $dados = ConexaoBD::listar($sql);
        
    }

    public function excluirCliente() {
        ConexaoBD::conexao();

        $sql = "DELETE FROM `locadora`.`cliente` WHERE `idCliente`='$this->idCliente';";

        ConexaoBD::excluirBanco($sql);
    }

}

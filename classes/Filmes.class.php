<?php

class Filmes {

    public $idFilme;
    public $titulo;
    public $genero;
    public $estoque;
    public $midia;
    public $status;

    public function inserirFilmes() {
        ConexaoBD::conexao();

        $sql = "INSERT INTO `locadora`.`filme` (`Titulo`, `Genero`, `Estoque`, `Midia`, `Status`) 
VALUES ('$this->titulo', '$this->genero', '$this->estoque', '$this->midia', '$this->status');";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarFilmes() {
        ConexaoBD::conexao();

        $sql = "SELECT * FROM locadora.filme";

        return $dados = ConexaoBD::listar($sql);
    }

    public function excluir() {
        ConexaoBD::conexao();

        $sql = "DELETE FROM `locadora`.`filme` WHERE `idFilme`='$this->idFilme';";

        ConexaoBD::excluirBanco($sql);
    }

}

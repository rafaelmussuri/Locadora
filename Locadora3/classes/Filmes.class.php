<?php

class Filmes {

    public $idFilme;
    public $titulo;
    public $genero;
    public $estoque;
    public $midia;
    public $status;

    public function inserirFilmes() {
        //ConexaoBD::conexao();

        $sql = "INSERT INTO `locadora`.`filme` (`Titulo`, `Genero`, `Estoque`, `Midia`, `Status`) 
VALUES ('$this->titulo', '$this->genero', '$this->estoque', '$this->midia', '$this->status');";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarFilmes() {
        

        $sql = "SELECT * FROM locadora.filme";

        return $dados = ConexaoBD::listar($sql);
    }

    public function listarFilmesId() {
        

        $sql = "SELECT * FROM locadora.filme WHERE idFilme = $this->idFilme";

        return $dados = ConexaoBD::buscarPorId($sql);
    }

    public function excluirFilmes() {
        

        $sql = "DELETE FROM `locadora`.`filme` WHERE `idFilme`='$this->idFilme';";

        ConexaoBD::excluirBanco($sql);
    }

    public function alterarFilmes() {
        

        $sql = "UPDATE `locadora`.`filme` SET
	`Titulo` = '$this->titulo', `Genero` = '$this->genero', `Estoque` = '$this->estoque', `Midia` = '$this->midia', `Status` = '$this->status' WHERE `idFilme` = '$this->idFilme'";

        ConexaoBD::alterar($sql);
    }

     public  function salvarFilme() {
        if ($this->idFilme == '') {
            $this->inserirFilmes();
        } else {
            $this->alterarFilmes();
        }
    }

}

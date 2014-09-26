<?php

class Locacao {
    
    public $idCliente;
    public $idFilmes;
    public $valorLocacao;
    public $locacao;
    public $devolucao;
    
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }
    
    public function getIdCliente(){
        return $this->idCliente;
    }
    
    public function setIdFilmes($idFilmes){
        $this->idFilmes = $idFilmes;
    }
    
    public function getIdFilmes(){
        return $this->idFilmes;
    }
    
    public function setValorLocacao($valorLocacao){
        $this->valorLocacao = $valorLocacao;
    }
    
    public function getValorLocacao(){
        return $this->valorLocacao;
    }
    
    
    
    public function setLocacao($locacao){
        $this->locacao = $locacao;
    }
    public function getLocacao(){
        return $this->locacao;
    }
    public function setDevolucao($devolucao){
        $this->devolucao = $devolucao;
    }
    public function getDevolucao(){
        return $this->devolucao;
    }
    
    
    
    public function inserirLocacao(){
        
        $sql = "INSERT INTO `locadora`.`movimento`(`Cliente_idCliente`, `Filme_idFilme`, `Locacao`, `Devolucao`, `dataLocacao`)
                        VALUES ('$this->idCliente', '$this->idFilmes', '$this->valorLocacao', '$this->devolucao', '$this->locacao');";
       
       ConexaoBD::inserirBanco($sql); 
    }

    public function listarLocacao(){
        
        $sql = "SELECT Nome,Titulo,Locacao,Devolucao,dataLocacao
                    FROM locadora.movimento
                        INNER JOIN locadora.cliente ON
                        movimento.Cliente_idCliente = cliente.idCliente
                            INNER JOIN locadora.filme ON 
                            movimento.Filme_idFilme = filme.idFilme;";
        
        return $dados = ConexaoBD::listar($sql);
    }

}




?>
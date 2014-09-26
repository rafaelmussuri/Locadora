<?php
include_once 'classes\ConexaoBD.php';

class Cliente {

    public $idCliente;
    public $nome;
    public $endereco;
    public $telefone;
    public $email;
    public $cep;
    public $nascimento;

    public function inserirCliente() {
        

        $sql = "INSERT INTO `locadora`.`cliente` (`Nome`, `Endereco`, `Telefone`, `Email`, `Cep`, `Nascimento`) 
VALUES ('$this->nome', '$this->endereco', '$this->telefone', '$this->email', '$this->cep', '$this->nascimento');";

        ConexaoBD::inserirBanco($sql);
    }

    public function listarCliente() {
        

        $sql = "SELECT * FROM locadora.cliente";

        return $dados = ConexaoBD::listar($sql);
        
    }
    
    public function listarClienteId() {
        

        $sql = "SELECT * FROM locadora.cliente WHERE idCliente = $this->idCliente";

        return $dados = ConexaoBD::buscarPorId($sql);
    }
    
    public function alterarCliente() {
        
        $sql = "UPDATE locadora.cliente
			SET
				Nome = '$this->nome',
				Endereco = '$this->endereco',
                                Telefone = '$this->telefone',
				Email = '$this->email',
                                Cep = '$this->cep',
                                Nascimento = '$this->nascimento'
                                    
			WHERE idCliente = $this->idCliente";

        ConexaoBD::alterar($sql);
    }

    public function excluirCliente() {
        ConexaoBD::conexao();

        $sql = "DELETE FROM `locadora`.`cliente` WHERE `idCliente`='$this->idCliente';";

        ConexaoBD::excluirBanco($sql);
    }
    
    public function salvarCliente() {
      if ($this->idCliente == '') {
            $this->inserirCliente();
        } else {
            $this->alterarCliente();
        }
    }

}

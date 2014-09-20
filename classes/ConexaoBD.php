<?php

class ConexaoBD {

    public static $sql;

    public static function conexao() {
        self::$objConexao = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
    }

    public static function inserirBanco($comando) {
        ConexaoBD::conexao();

        self::$sql = $comando;

        $status = self::$objConexao->query(self::$sql);
		if ($status == false){
			//erro
			var_dump(self::$objConexao->errorInfo());
			exit;
		}
    }

    public static function listar($comando) {
        ConexaoBD::conexao();

        self::$sql = $comando;

        $dados = self::$objConexao->query(self::$sql);
        if ($dados == false) {
            //erro
            var_dump(self::$objConexao->errorInfo());
            exit;
        } else {
            //converte todos os registros do objeto para um array
            return $dados->fetchAll();
        }
    }

    public static function excluirBanco($comamdo) {
        ConexaoBD::conexao();
        
        self::$sql = $comamdo;
        
        $status = self::$objConexao->query(self::$sql);
        if ($status == false) {
            //erro
            var_dump(self::$objConexao->errorInfo());
            exit;
        }
    }

}

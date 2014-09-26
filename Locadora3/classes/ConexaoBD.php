<?php

class ConexaoBD {

    public static $sql;
    public static $objConexao;

    public static function conexao() {
        if (self::$objConexao == null) {
            self::$objConexao = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
            return self::$objConexao;
        } else {
            return self::$objConexao;
        }
    }

    public static function inserirBanco($comando) {
        ConexaoBD::conexao();

        self::$sql = $comando;
        

        $status = self::$objConexao->query(self::$sql);
        if ($status == false) {
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

    public static function buscarPorId($comando) {
        ConexaoBD::conexao();

        self::$sql = $comando;

        $dados = self::$objConexao->query(self::$sql);
        if ($dados == false) {
            //erro
            var_dump(self::$objConexao->errorInfo());
            exit;
        } else {
            //converte todos os registros do objeto para um array
            return $dados->fetch();
        }
    }

    public static function excluirBanco($comando) {
        ConexaoBD::conexao();

        self::$sql = $comando;

        $status = self::$objConexao->query(self::$sql);
        if ($status == false) {
            //erro
            var_dump(self::$objConexao->errorInfo());
            exit;
        }
    }

    public static function alterar($comando) {
        ConexaoBD::conexao();

        var_dump($comando);
        self::$sql = $comando;

        $status = self::$objConexao->query(self::$sql);
        if ($status == false) {
            //erro
            var_dump(self::$objConexao->errorInfo());
            exit;
        }
    }
    

}

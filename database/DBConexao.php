<?php

class DBConexao{
    //configuraçao do banco de Dados 
    private $host = "localhost";
    private $dbname = "sistema amtu";
    private $username = "root";
    private $password = "senac2023";

    protected $conx;
    private static $instance = null;

    public function __construct()
    {
        try{
            //inicializar a conexao
            $this -> conx = new PDO("mysql:host=$this->host;
            dbname=$this->dbname;charset=utf8",$this->username,$this->password);
            $this->conx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo "Erro na conexão com o banco de dados: ".$e->getMessage();
        }
    }

    /**
     * Metodo estatico para obter a intancia unica da conexão(implementacao do Singleton)
     */
    
    public static function getConexao(){
        if(!self::$instance){
            self::$instance = new DBConexao();
        }
        return self::$instance->conx;
    }
}
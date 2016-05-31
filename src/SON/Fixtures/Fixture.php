<?php

namespace SON\Fixtures;

use SON\Database\Model;
use SON\Pessoa;
use SON\Pessoas\PessoaFisica;
use SON\Pessoas\PessoaJuridica;

class Fixture {

	private $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function createTables() {

    	try{
    		$this->conexao->exec("
	    		CREATE TABLE IF NOT EXISTS clientes (
				id int(11) NOT NULL AUTO_INCREMENT,
				nome varchar(100) NOT NULL,
				email text NOT NULL,
				documentotipo char(20) NOT NULL,
				documentonumero varchar(20) NOT NULL,
				endereco text NOT NULL,
				telefone varchar(12) NOT NULL,
				grau char(10) NOT NULL ) 
	    		
	    	");
    	}
    	
    	catch(\PDOException $e){
            die('Erro: '. $e->getMessage());
        }
    }

    public function dropTables()
    {
    	try{
    		$this->conexao->exec("DROP TABLE clientes");
    	}
        
        catch(\PDOException $e){
            die('Erro: '. $e->getMessage());
        }
    }

    public function insert(){

    	try {
    		$Model = new Model($this->conexao);

    	}
	    	
   		

    	catch(\PDOException $e){
            die('Erro: '. $e->getMessage());
        }

        
    }
}
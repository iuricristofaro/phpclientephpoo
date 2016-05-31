<?php

namespace SON\Database;


use SON\Pessoa;
use SON\Pessoas\PessoaFisica;
use SON\Pessoas\PessoaJuridica;

class Model
{
    private $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function fetchAll($order = 'ASC')
    {
        $array = array();

        $consulta = $this->conexao->query("SELECT * FROM clientes ORDER BY id  {$order}");

        while ($row = $consulta->fetch(\PDO::FETCH_ASSOC)) {
            
                $array[$row['id']] = new PessoaFisica(
                    $row['id'], 
                    $row['nome'], 
                    $row['email'], 
                    $row['documentotipo'],
                    $row['documentonumero'], 
                    $row['telefone'],
                    $row['endereco'],
                    $row['grau']
                    );
           
                $array[$row['id']] = new PessoaJuridica(
                    $row['id'], 
                    $row['nome'], 
                    $row['email'], 
                    $row['documentotipo'],
                    $row['documentonumero'], 
                    $row['telefone'],
                    $row['endereco'],
                    $row['grau']
                    );
            
        }

        return $array;
    }

    public function insert(Pessoa $cliente)
    {
        $stmt = $this->conexao->prepare('INSERT INTO clientes VALUES(
            :id, 
            :nome, 
            :email, 
            :documentotipo,
            :documentonumero, 
            :telefone,
            :endereco,  
            :tipo, 
            :grau)');

        $stmt->execute(
            array(
                ':id' => null,
                ':nome' => $cliente->getNome(),
                ':email' => $cliente->getEmail(),
                ':documentotipo' => $cliente->getEquipeTipo(),
                ':documentonumero' => $cliente->getEquipeNumero(),
                ':telefone' => $cliente->getTelefone(),
                ':endereco' => $cliente->getEndereco(),
                ':tipo' => $cliente->getTipo(),
                ':grau' => $cliente->getGrau(),
            ));
    }

    public function find($id)
    {
        $consulta = $this->conexao->query("SELECT * FROM clientes WHERE id = {$id}");
        $row = $consulta->fetch(\PDO::FETCH_ASSOC);

        
            return new PessoaFisica(
                $row['id'], 
                $row['nome'], 
                $row['email'], 
                $row['documentotipo'],
                $row['documentonumero'], 
                $row['telefone'],
                $row['endereco'],
                $row['grau']
                );
        
            return new PessoaJuridica(
                $row['id'], 
                $row['nome'], 
                $row['email'], 
                $row['documentotipo'],
                $row['documentonumero'], 
                $row['telefone'],
                $row['endereco'],
                $row['grau']
                );
        
    }

    public function getConn()
    {
        return $this->conexao;
    }

    public function setConn($conexao)
    {
        $this->conexao = $conexao;
        return $this;
    }
}
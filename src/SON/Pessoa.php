<?php

namespace SON;


abstract class Pessoa implements Interfaces
{
    protected $id;
    protected $nome;
    protected $email;
    protected $documentotipo;
    protected $documentonumero;
    protected $telefone;
    protected $endereco;
    protected $tipo;
    protected $importancia;

    public function __construct($id, $nome, $email, $documentotipo, $documentonumero, $telefone, $endereco, $importancia = null)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->documentotipo = $documentotipo;
        $this->documentonumero = $documentonumero;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->id = $id;
        $this->importancia = $importancia;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEquipeTipo()
    {
        return $this->documentotipo;
    }

    public function setEquipeTipo($documentotipo)
    {
        $this->documentotipo = $documentotipo;
        return $this;
    }

    public function getEquipeNumero()
    {
        return $this->documentonumero;
    }

    public function setEquipeNumero($documentonumero)
    {
        $this->documentonumero = $documentonumero;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

    public function getGrau()
    {
        $importancia = '';
        for($i = 0; $i < $this->importancia; $i++){
        $importancia .= '<span class="glyphicon glyphicon-star amarela" aria-hidden="true"></span>&nbsp;';
    }
        return $importancia;
    }

    public function setGrau($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }    
}
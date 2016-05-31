<?php

namespace SON\Pessoas;

use SON\Pessoa;

use SON\Fixtures;

class PessoaFisica extends Pessoa
{
    public function __construct($id, $nome, $email, $documentotipo, $documentonumero, $telefone, $endereco, $importancia)
    {
        parent::__construct($id, $nome, $email, $documentotipo, $documentonumero, $telefone, $endereco, $importancia);

        
    }

}
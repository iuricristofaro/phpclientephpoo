<?php

date_default_timezone_set('America/Sao_Paulo');

$conexao = new PDO(
    'mysql:host=localhost;dbname=teste', 'root', 'iuri'
);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




<?php


require_once __DIR__.'/vendor/autoload.php';

require_once 'conexao.php';

$fixture = new \SON\Fixtures\Fixture($conexao);
$fixture->createTables();
$fixture->insert();

$Model = new SON\Database\Model($conexao);

if(isset($_GET['order'])){
    $clientes = $Model->fetchAll($_GET['order']);
}else{
    $clientes = $Model->fetchAll();
}

?>

<?php require_once 'public/includes/header.php'; ?>

<div class="container">

    <div class="row">
        <div class="page-header">
            <h1>Listagem de Clientes</h1>
        </div>
    </div>

    <div class="alert alert-defaul" role="alert">
        <a href="?order=asc" class="btn btn-primary">
            <span aria-hidden="true"></span>&nbsp;Ordem Crescente
        </a>
        <a href="?order=desc" class="btn btn-primary">
            <span aria-hidden="true"></span>&nbsp;Ordem Decrescente
        </a>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <td class="list-group-item-danger">Id</td>
            <td class="list-group-item-danger">Nome</td>
            <td class="list-group-item-danger">E-Mail</td>
            <td class="list-group-item-danger">Documento Tipo</td>
            <td class="list-group-item-danger">Documento Numero</td>
            <td class="list-group-item-danger">Endereço</td>
            <td class="list-group-item-danger">Telefone</td>
            <td class="list-group-item-danger">Grau</td>
            <td class="list-group-item-danger">Ações</td>
        </thead>
        <?php foreach($clientes as $cliente): ?>
            <tr>
                <td class="list-group-item-success"><?= $cliente->getId(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getNome(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getEmail(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getEquipeTipo(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getEquipeNumero(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getEndereco(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getTelefone(); ?></td>
                <td class="list-group-item-success"><?= $cliente->getGrau(); ?></td>
                <td class="list-group-item-success"><a href="detalhes.php?id=<?= $cliente->getId(); ?>"><img src="public/imagem/search.png" alt=""></a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>



<?php require_once 'public/includes/footer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dados</title>
</head>
<body>
    <h1>Lista de Clientes</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div style="color: green; font-weight: bold;">
        <?= session()->getFlashdata('success') ?>  
    </div>
<?php endif; ?>


    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Email</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= esc($cliente['nome']) ?></td>
            <td><?= esc($cliente['endereco']) ?></td>
            <td><?= esc($cliente['email']) ?></td>
            <td><a href="/excluir/<?= esc($cliente['id']) ?>">Excluir</a></td>
            <td><a href="/editar/<?= esc($cliente['id']) ?>">Editar</a></td>
        </tr>
        <?php endforeach; ?>

    <a href="/">Voltar</a>
    


</body>
</html>
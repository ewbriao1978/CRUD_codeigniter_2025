<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= site_url('/update/'.$cliente['id']) ?>" method="post">
        <label>Nome:</label>
        <input type="text"  name="nome" value ="<?=$cliente['nome'] ?>  " required><br><br>

        <label>E-mail:</label>
        <input type="email" name="email" value ="<?=$cliente['email'] ?> " required><br><br>

        <label for="email">Endereço:</label>
        <input type="text"  name="endereco" value ="<?=$cliente['endereco'] ?> " required><br><br>

        <input type="submit" value="Atualizar">

        <br>

        <a href="/listar_dados">Listar Dados</a>
    
</body>
</html>
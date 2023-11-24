<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MERCADO BEM BARATO </h1>

    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bembarato';

    $conexao = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $password);

    $sql = "SELECT * FROM estoque WHERE preço > 15.00";
    $result = $conexao->query($sql);
    $dados = $result->fetchAll();

    echo "<pre>";
    var_dump($dados);

    // $select = "SELECT * FROM estoque WHERE preço >= 15.00";
    // $result = $conexao->query($select);
    // $dados = $result->fetchAll();
   
    // echo "<pre>";
    // var_dump($dados);

    
    ?>
</body>
</html>
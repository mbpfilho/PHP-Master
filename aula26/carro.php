<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carro</title>
</head>
<body>
    <?php
    $preco=160000;
    $tipo="luxo";

    if($tipo=="luxo"){
        $pf=$preco*1.15;
        echo "<p>Veículo de luxo</p>";
        echo "<p>Preco final: R$ ".$pf."</p>";
    }else{
        $pf=$preco*.8;
        echo "<p>Veículo comum</p>";
        echo "<p>Preco final: R$ ".$pf."</p>";
    }
    ?>
</body>
</html>
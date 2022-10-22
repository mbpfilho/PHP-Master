<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
</head>
<body>
    <?php
    $compra=200;
    $formpag="avista";

    if($formpag=="avista"){
        $vfinal=$compra*.875;
    }else{
        $vfinal=$compra*1.08;
    }
    echo "<p>Valor final: ".$vfinal."</p>";
    ?>
</body>
</html>
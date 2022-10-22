<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eleicao</title>
</head>
<body>
    <?php
    $total=132210;
    $brancos=32123;
    $nulos=18541;
    $validos=81710;

    $perbrancos=($brancos/$total)*100;
    $pernulos=($nulos/$total)*100;
    $pervalidos=($validos/$total)*100;

    echo "Votos brancos:".$perbrancos."%";
    echo "Votos nulos:".$pernulos."%";
    echo "Votos válidos:".$pervalidos."%";

    ?>
</body>
</html>
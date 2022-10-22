<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aposentadoria</title>
</head>
<body>
    <?php
    $idade=80;
    if($idade>=65){
        echo "<p>Idoso</p>";
        $aposentadoria=$idade-65;
        echo "<p>Aposentado há ".$aposentadoria." anos</p>";
    }else{
        echo "<p>Näo idoso</p>";
        $aposentadoria=65-$idade;
        echo "<p>Faltam ".$aposentadoria." anos para a aposentadoria</p>";
    }
    ?>
</body>
</html>
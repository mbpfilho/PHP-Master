<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validar idade</title>
</head>
<body>
    <?php
    $idade=30;

    if($idade>=18){
        echo "Maior de idade";
    }else{
        echo "Menor de idade";
    }
    ?>
</body>
</html>
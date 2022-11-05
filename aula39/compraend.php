<?php
    $valor=$_GET["valor"];
    $formpag=$_GET["formapagamento"];
    $nome=$_GET["nome"];

    if($formpag=="avista"){
        $vfinal=$valor*.8725;
    }else if($formpag=="cartao"){
        $vfinal=$valor*1.22;
    }else if($formpag=="aprazo"){
        $vfinal=$valor*1.3;
    }
    echo "<h3>Valor final para $nome: R$ $vfinal</h3>";
?>
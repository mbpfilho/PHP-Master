<?php 
$nome=$_GET["nome"];
$cor=$_GET["cordapele"];
$valor=$_GET["valor"];

if($cor=="Escura"){
    $total=$valor*.3;
    echo "<h3>$nome pagará: R$ $total</h3>";
}else{
    if($cor=="Branca"){
        $total=$valor*1.12;
        echo "<h3>$nome pagará: R$ $total</h3>";
    }else{
        echo "<h3>Cor de pele inválida!</h3>";
    }
}

?>
<?php
    $cont=1;
    $tabuada=$_GET["tabuada"];

    while($cont<=10){
        $resultado=$tabuada*$cont;
        echo "$tabuada x $cont = $resultado<br>";
        $cont++;
    }
?>
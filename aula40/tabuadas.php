<?php
    $f1=1;
    while($f1<=10){
        $f2=1;
        while($f2<=10){
            $resultado=$f1*$f2;
            echo "$f1 x $f2 = $resultado<br>";
            $f2++;
        }
        echo "<br>";
        $f1++;
    }
?>
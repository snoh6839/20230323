<?php
    $i = 2;
    while ($i <= 9) {
        $j = 1;
        while ($j <= 9) {
            echo $i."단\n".$i."x".$j."=".($i*$j)."\n"; 
            $j++;
        }
        $i++;
    };
?>

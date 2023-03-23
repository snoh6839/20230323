<?php
    // $i = 2;
    // while ($i <= 9) {
    //     echo $i."단\n";
    //     $j = 1;
    //     while ($j <= 9) {
    //         echo $i."x".$j."=".($i*$j)."\n"; 
    //         $j++;
    //     }
    //     $i++;
    // };

    for ($i=2; $i <10 ; $i++) { 
        echo $i."단\n";
        for ($j=1; $j <10 ; $j++) { 
            echo $i."x".$j."=".($i*$j)."\n"; 
        }
    }

?>

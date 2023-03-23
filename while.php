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

    // for ($i=2; $i <10 ; $i++) { 
    //     echo $i."단\n";
    //     for ($j=1; $j <10 ; $j++) { 
    //         echo $i."x".$j."=".($i*$j)."\n"; 
    //     }
    // }
    
    // $count = 0;
    // do {
    //     echo str_repeat("*", $count) . str_repeat(" ", $count) . "\n";
    //     $count++;
    // } while ($count < 6);

    $rows = 5; 

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
    echo "\n";
    }

    for ($i = $rows; $i > 0; $i--) {
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
    echo "\n";
    }

    for ($i = $rows; $i > 0; $i--) {
        for ($j=1; $j < $i; $j++) { 
            echo " ";
        }
        for ($j= $rows+1; $j > $i; $j--) { 
            echo "*";
        }
    echo "\n";
    }

    for ($i = 1; $i <= $rows-1; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo " ";
        }
        for ($j= $rows; $j > $i; $j--) { 
            echo "*";
        }
    echo "\n";
    }

    $rows2 = 5*2;

    for ($i=1; $i < $rows2; $i+=2) { 
        for ($j=$rows2-1; $j > $i; $j-=2) { 
            echo " ";
        }
        for ($j=0; $j < $i; $j++) { 
            echo "*";
        }
    echo "\n";
    }

    for ($i=1; $i < $rows2; $i+=2) { 
        for ($j=1; $j < $i; $j+=2) { 
            echo " ";
        }
        for ($j=$rows2; $j > $i; $j--) { 
            echo "*";
        }
    echo "\n";
    }



        $left_eye = rand(0, 1) ? 'o' : '-';
        $right_eye = rand(0, 1) ? 'o' : '-';
        $tail = rand(0, 1) ? '>>' : '//';

        echo "   /^\ ____/^\     \n";
        echo " /            \\  \n";
        echo "/// | | | | | \\\\ \n";
        echo "|   {$left_eye}     {$right_eye}     |\n";
        echo "| ===  ^   ===  |\n";
        echo " \_____________/\n";
        echo " |___/\-v-/\___|        \n";
        echo "  \\ v  \ /  v /====={$tail}  \n";
        echo "   \\_________/   \n";

    


?>

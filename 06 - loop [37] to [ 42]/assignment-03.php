<?php

$num = 2;
while ($num < 520) {
    if ($num == 382) {
        break;
    }
    if ($num == 2) {
        $num--;
        echo "<div>1</div>";
    }
    echo "<div>";
    echo $num = (2 * $num) + 2;
    echo "</div>";

}
//***************************
 <?php
        for ( $num = 2;$num < 520;$num = (2 * $num) + 2) {
            if ($num == 2){--$num;}
            echo $num .'</br>' ;
        }
        ?>

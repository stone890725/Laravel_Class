<?php
    echo '<table style="width:100%">';


for ($i = 1; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 9; $j++) {
        echo '<th>';
        echo $j . "*" . $i . "=" . $i * $j . " ";
        echo '</th>';
    }
        echo  '</tr>';
        echo "<br>";
    }
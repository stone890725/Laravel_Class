<?php

echo '<table style="width:100%;background-color: #00fafa">';
$start = $_GET["start"];
$end = $_GET["end"];
for ($i = 1; $i < 10; $i++) {
    echo '<tr>';
    for ($j = $start; $j <= $end; $j++) {
        echo '<th>';
        echo $j . "*" . $i . "=" . $i * $j . " ";
        echo '</th>';
    }
    echo '</tr>';
    echo "<br>";
}
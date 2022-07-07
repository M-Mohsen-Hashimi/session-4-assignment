<?php
function draw_rectangle($height, $width) {
    for ($i = 1; $i < $height + 1; $i++) {
        for ($j = 1; $j < $width + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

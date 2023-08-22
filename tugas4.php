<?php
for ($i = 1; $i <= 50; $i++) {
    echo "<br> . $i";
    if ($i % 2 == 0) {
        echo " (Genap)";
    } else {
        echo " (Ganjil)";
    }
}

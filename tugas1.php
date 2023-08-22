<?php
$A = 10;
$B = 20;
$C = 30;

if ($A >= $B && $A >= $C) {
    echo "$A";
} elseif ($B >= $A && $B >= $C) {
    echo "$B";
} else {
    echo "$C";
}

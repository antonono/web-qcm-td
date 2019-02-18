<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
$res = 0;
$rep = null;
$N = (int)array_shift($args);
$K = array_shift($args);
for ($i = 0; $i < $N; $i++) {
    $A = $args[$i];

    if ($A[0] == "X") {
        $rep = "A";
    }
    if ($A[1] == "X") {
        $rep = "B";
    }
    if ($A[2] == "X") {
        $rep = "C";
    }
    if ($A[3] == "X") {
        $rep = "D";
    }
    if ($A[4] == "X") {
        $rep = "E";
    }

    if ($rep == $K[$i]) {
        $res = $res + 100/$N;
    }
}

// Write an action using echo().

echo($res);

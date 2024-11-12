<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}


$n = 21;
$fibSequence = fibonacci($n);
foreach ($fibSequence as $num) {
echo $num ."\n";
}
<?php

//四則演算
//2つの数を作る
$i = random_int(1, 999);
$j = random_int(1, 999);

//加算
$k = $i + $j;
//結果の出力
echo "{$i} + {$j} = {$k} \n";

//減算
$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";

//乗算
$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";

//除算
$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";
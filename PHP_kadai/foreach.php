<?php

//配列の作成
$array = [
    "key1" => "Hello" ,
    0 => '1st' ,
    1 => '2nd' ,
    "key2" => 3.14 ,
];

//foreachで処理
foreach($array as $k => $v) {
    echo "{$k} -> {$v} \n";
}

//foreachで処理
echo "\n";
foreach($array as $value) {
    echo "{$value} \n";
}
<?php

//文字列型の確認
$s = "Hello";
var_dump ($s);

//1文字目にアクセス
echo $s[1], "\n";

// マルチバイトで0文字目にアクセス
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";

// 「数字」と「数値」
$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);
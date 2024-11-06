<?php
//
error_reporting(-1);
ini_set('display_errors', 'on');

functin h(string $s) : string
{
    return htmlspecialchars($s,ENT_QUOTES);
}

$input = $_GET['input_text']??"";

echo "あなたが入力したのは" , h($input),"ですね";

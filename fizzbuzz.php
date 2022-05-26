<?php

/*
 1 ~ $maxまでの数値を順に処理し、処理した数値が
 ・3の倍数であれば"fizz"
 ・5の倍数であれば"buzz"
 ・3と5の公倍数であれば"fizzbuzz"
 ・それ以外であれば"処理した数値"
 を出力するプログラムを実装する
*/

$max = 100;

for($i = 1; $i < $max; $i++){
    if($i % 3 == 0){
        echo "fizz";
    }elseif($i % 5 ==0){
        echo "buzz";
    }elseif($i % 3 == 0 && $i % 5 == 0){
        echo "fizzbuzz";
    }else{
        echo $i;
    }
    echo "\n";
}

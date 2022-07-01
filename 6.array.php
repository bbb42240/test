<?php

// 陣列可以使用 括號“（）” 或 中括號“[]”
$a = array(1, 2, 3);
$b = array("apple", "banana", "peach");
$c = [9, 99, 999];

var_dump($a);
echo "<br>";
var_dump($b);

echo "<br>";
echo "<br>";

echo "<pre>";
var_dump($c);
echo "</pre>";

echo "<br>";

print_r($c);

echo "<br>";
echo "<br>";

$food = ["控肉飯", "涼麵", "肉圓"];
echo $food[0] . "? " . $food[1] . "? " . $food[2] . "? " . "小孩子才做選擇，我全都要。";
?>
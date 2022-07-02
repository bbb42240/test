<?php

$price = array("控肉飯" => "85", "泡麵" => "25", "肉圓" => "50");

echo "控肉飯 " . $price["控肉飯"];
echo "<br>";
echo "泡麵 " . $price["泡麵"];
echo "<br>";
echo "肉圓 " . $price["肉圓"];

echo "<br>";
echo "<br>";

if ($price["控肉飯"] >= 50){
    echo "有錢吃好料";
}else{
    echo "沒錢吃土ㄌ...";
}

echo "<br>";
echo "<br>";

echo "<pre>";
print_r(array_keys($price));
echo "</pre>";
?>
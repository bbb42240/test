<?php
$a = true;
$b = false;

if($a == $b){
    echo "This is true";
} else{
    echo "This is false";
}

echo "<br>";
echo "<br>";
echo "<br>";

// tenorary operator or conditional operator
// condition ? code a : code b

echo $a === $b ? "This is true" : "This is false";

echo "<br>";
echo "<br>";
echo "<br>";

// 另外設置一個變數再做 echo
$c = $a === $b ? "This is true" : "This is false";
echo $c;
?>
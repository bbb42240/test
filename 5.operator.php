<!-- Logical operator -->

<?php

// <!-- Or operator  可用 “or” “||”-->
$a = true;
$b = false;

if($a || $b){
    echo "This is true";
} else{
    echo "This is false";
}

echo "<br>";
echo "<br>";
echo "<br>";

// <!-- And operator  可用 “and” “&&”-->

if($a && $b){
    echo "This is true";
} else{
    echo "This is false";
}

echo "<br>";
echo "<br>";
echo "<br>";

// <!-- Not operator  用 “!”-->

if(!$a){
    echo "This is true";
} else{
    echo "This is false";
}

echo "<br>";

if(!!$b){
    echo "This is true";
} else{
    echo "This is false";
}
?>
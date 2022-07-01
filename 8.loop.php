<?php

$x = 1;

while ($x <= 5){
    echo "The value is " . $x . " keep operating..." . "<br>";
    $x++; //可寫成 "$x = $x + 1" 或 "$x++"
}
echo $x;

// 另一種寫法
echo "<br>";
echo "<br>";

$y = 11;

while ($y >= 5) :
    echo "The value is " . $y . " keep operating..." . "<br>";
    $y--; //可寫成 "$y = $y - 1" 或 "$y--"
endwhile;
echo $y;
?>

<br><br><br>

<?php

//for (目前的值; 條件; 執行;)
for ($x = 0; $x <= 10; $x = $x + 2) :
    echo "The value is: " . $x . " (operating...)" . "<br>";
endfor; 
echo $x;
?>
<!-- Integer 整數 -->
<?php
$a = 10;
$b = 0;
$c = -100;

echo "$a";
echo "<br>";
echo "$b";
echo "<br>";
echo "$c";
echo "<br>";

// var_dump 用來解釋值的定義以及數值
var_dump($a);
echo "<br>";
echo gettype($c); 
?>

 <br><br>

<!-- Float 小數點 -->
<?php
$a = 1.1;
$b = 0.124324;
$c = -100.3445;

echo "$a";
echo "<br>";
echo "$b";
echo "<br>";
echo "$c";
echo "<br>";

var_dump($a);
echo "<br>";
echo gettype($c);
?>

<br><br>

<!-- String 字串 -->
<?php
$a = "hi";
$b = "hello";
$c = "Hello world";

echo "$a";
echo "<br>";
echo "$b";
echo "<br>";
echo "$c";
echo "<br>";

var_dump($a); //除錯用的
echo "<br>";
echo "///";
echo "<br>";
echo gettype($c); //變數類型, float=double=real
echo "<br>";
echo strlen($c); //字串長度
?>
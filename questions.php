<?php
//  1
echo "Question 1";
echo "<br>";
for($i=0; $i<=5; $i++){
    $i = $i*2;
    echo "$i";
}
echo "<br>";

// 2
echo "<br>";
echo "Question 2";
echo "<br>";
$a = 0;
 
if($a = 0)
{
    echo "Sun";   
}
else
{
  echo "Moon";
}
echo "<br>";

// 3
echo "<br>";
echo "Question 3";
echo "<br>";
$a = 0;
 
if($a = -1)
{
   echo "Sun";   
}
else
{
   echo "Moon";
}
echo "<br>";

// 4
// Originale de la question 4
$a=0;
$b=0;
 
for($i=0;$i<10;$i++)
{
      if(++$a<5 && $b++<7){  }
}
echo $a." ".$b;
echo "<br>";

echo "<br>";
echo "Question 4";
echo "<br>";
$a=0;
$b=0;

for($i=0;$i<10;$i++)
{
    if(++$a<5 && $b++<7){ 
        echo "a =" . $a;
        echo "<br>";
        echo "b =". $b;
        echo "<br>";
    }
}
echo $a." ".$b;
echo "<br>";

echo "<br>";
echo "Question 5";
echo "<br>";
$a=122; $b=13.1;
$c=$a+$b;
$d=$a.$c;
echo $d;
echo "<br>";
?>
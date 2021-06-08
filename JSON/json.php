<?php  
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

// $myJSON = json_encode($myObj);

// echo $myJSON;


// 2
$myArr = array("John", "Mary", "Peter", "Sally");
$myJSON = json_encode($myArr);
echo "json_encode simple ".$myJSON."<br>";


// 3
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$encode= json_encode($arr);
echo "json_encode table non-associatif ".$encode."<br>";

$encodeObject = json_encode($arr, JSON_FORCE_OBJECT);
print_r("json_encode Object ".$encodeObject."<br>");

$decode = json_decode($encode);
echo "json_decode ";
print_r($decode);
echo "<br>";
?>
<?php 
function hata($mesaj) {
    throw new Exception($mesaj);
 }
  
 try{
    $x = 10;
    $y = 0;
    if($y == 0) hata('Sıfıra bölünmez!');
    echo 'Bölme işlemi sonucu: ' . $x/$y;
 } catch(Exception $e) {
       echo $e->getMessage();
 }
  
 echo 'Selam Dünya' . "<br>";

 try{
    $param = 100;
    $harcamam = 150;
    if($harcamam > $param)
    throw new Exception("Paramız harcamaya yetmiyor!");
 } catch(Exception $e) {
       echo $e->getMessage();
 }
 
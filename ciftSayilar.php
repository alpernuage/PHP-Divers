<?php
 
$sayilar=[1,25,30,54,75,91,21,34,4];
 
$ciftSayilar=array_filter($sayilar,function($gelen){
    return $gelen % 2 == false;
});
print_r($ciftSayilar);

// VEYA
function ciftSayiMi($gelen){
    return $gelen % 2 == false;
}
 
 
$sayilar=[1,25,30,54,75,91,21,34,4];
 
$ciftSayilar=array_filter($sayilar,'ciftSayiMi');
print_r($ciftSayilar);
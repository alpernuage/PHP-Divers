<?php 
class Futbolcu
{
    public $adSoyad;
    public $yas;

    public function __set($ozellik, $deger)
    {
        echo "Class içinde tanımlı olmayan '$ozellik' özelliğine değer atayamazsınız.";
    }

    public function __get($ozellik)
    {
        echo "Class içinde '$ozellik' özelliği tanımlı değildir. ";
    }
}

$futbolcu = new Futbolcu();
$futbolcu->adSoyad = "Nurullah Aslan";
$futbolcu->yas = 22;

$futbolcu->takim = "Samsunspor";        // __set sihirli metodu çalışacaktır.

echo $futbolcu->boy;      
?>
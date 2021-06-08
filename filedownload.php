<?php 
function dosyaDownload($dosya)
{
    if ((isset($dosya))&&(file_exists($dosya))) {
        header("Content-length: ".filesize($dosya));
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $dosya . '"');
        readfile("$dosya");
    } else {
        echo "Dosya Seçilmedi";
    }
}
 
//Kullanımı
dosyaDownload('abcd.pdf');
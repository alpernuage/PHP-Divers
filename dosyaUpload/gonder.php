<?php

if (isset($_FILES['dosya'])) {
    $hata = $_FILES['dosya']['error'];
    if ($hata != 0) {
        echo 'Yüklenirken bir hata gerçekleşmiş.';
    } else {
        $boyut = $_FILES['dosya']['size'];
        if ($boyut > (1024 * 1024 * 3)) {
            echo 'Dosya 3MB den büyük olamaz.';
        } else {
            // name 	Gönderilen dosyanın adı
            // type 	Gönderilen dosyanın tipi
            // tmp_name 	Gönderilen dosyanın geçici olarak sunucuda barındığı adres.
            // size 	Gönderilen dosyanın bayt cinsinden boyutu
            // error 	Dosya gönderilirken gerçekleşen hata kodu
            $tip = $_FILES['dosya']['type'];
            $isim = $_FILES['dosya']['name'];
            $uzanti = explode('.', $isim);
            $uzanti = $uzanti[count($uzanti) - 1];
            if ($tip != 'image/jpeg' || $uzanti != 'jpg') {
                echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
            } else {
                $dosya = $_FILES['dosya']['tmp_name'];
                copy($dosya, $_FILES['dosya']['name']);
                echo 'Dosyanız upload edildi!' . "<br>";
                echo "tip : " . $tip . "<br>";
                echo "hata : " . $hata . "<br>";
                echo "boyut : " . $boyut . "<br>";
                echo "isim : " . $isim . "<br>";
                echo "uzanti : " . $uzanti . "<br>";
            }
        }
    }
}

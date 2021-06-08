<?php 
include_once "db.php";

$db = "mobilhanem";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS `uyeler` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `kullaniciAdi` varchar(25) NOT NULL,
        `adSoyad` varchar(100) NOT NULL,
        `sifre` varchar(255) NOT NULL,
        `posta` varchar(20) NOT NULL,
        `telefon` varchar(20) NOT NULL,
        PRIMARY KEY (`id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table uyeler created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>
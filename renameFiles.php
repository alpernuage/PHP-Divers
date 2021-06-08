<?php

// $repertoire = opendir('Salut');

$files = scandir('Salut');
// print_r($files);
// $fileList = array();
foreach ($files as $file => $fileName) {
    // array_push($fileList, $fileName);
    // print_r($fileList);
    // echo $fileName;
    $arrayFiles = explode('.', $fileName);
    // $arrayFiles[1];
    // $arrayFiles[1] = "php";
    // echo $arrayFiles[1];
    // $fileName = $arrayFiles[0] . "." . "php";
    // echo $fileName;
    // echo $fileName;
    // $uzanti = $fileName[1];
    // echo $uzanti;
    rename($fileName,$arrayFiles[0] . "." . "php");
    echo "<br>";
    echo $fileName;
}

// $dir = new DirectoryIterator(dirname(__FILE__));
// foreach ($dir as $fileName) {
//     echo $fileName->getFilename()."<br>";
// }

// foreach ($fileNames as $key => $fileName) {
//     // rename($fileName, str_replace("Salut", "Hello", $fileName));    
//     str_replace("Salut", "Hello", $fileName);
// }

// stackoverflow
// if ($handle = opendir('/path/to/files')) {
//     while (false !== ($fileName = readdir($handle))) {
//         $newName = str_replace("SKU#","",$fileName);
//         rename($fileName, $newName);
//     }
//     closedir($handle);
// }
// OR
// (foreach (array_filter(glob("$dir/WV1716B*.jpg") ,"is_file") as $f)
// rename ($f, str_replace("SKU#", "", $f));)
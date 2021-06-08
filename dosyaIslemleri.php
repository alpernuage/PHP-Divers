<?php echo "hello ";

touch('bonjour.txt');

$file = fopen('bonjour.txt', 'r');
$content = fread($file, filesize('bonjour.txt'));
echo $content;
fclose($file);

$file = fopen('bonjour.txt', 'w');
fwrite($file, 'Au revoir ');
fclose($file);

$file = fopen('bonjour.txt', 'a');
fwrite($file, 'À bientôt! ');
fclose($file);

for ($number = 1; $number < 4; $number++) {
    $file_name = 'file' . $number . '.txt';
    touch($file_name);

    $file = fopen($file_name, 'w');
    fwrite($file, 'Content ' . $number);
    fclose($file);
}
unlink('file1.txt');

if (file_exists('file2.txt')) {
    echo 'Oui';
} else {
    echo 'Non';
}

// mkdir('Salut');
// rmdir('Salut1');

for ($i = 0; $i < 10; $i++) {
    touch('Salut/Salut' . $i . '.txt');
}

rename('file2.txt', 'Salut/file2.txt');

$repertoire = opendir('Salut');
while ($a = readdir($repertoire)) {
    echo $a . '<br/>';
}

print_r(scandir('Salut'));

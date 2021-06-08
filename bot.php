<?php
// Tum siteyi almak icin:
// $site = "http://www.phpr.org";
// $icerik = file_get_contents($site);
// echo $icerik;

// Sadece title etiketi icini almak icin:
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
        '(.*?)' . preg_quote($son, '/') . '/i', $yazi, $m);
    return @$m[1];
}

$icerik = file_get_contents("http://www.phpr.org");
$baslik = ara("<title>", "</title>", $icerik);
echo $baslik[0];

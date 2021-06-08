<?php 
function showMessage($bonjour = false) {
    echo ($bonjour) ? 'bonjour' : 'bye' ;
}

showMessage();

echo '<br>';

function showMessage2($mySalut) {
    if ($mySalut == 'salut') {
        echo $mySalut;
    } else {
        echo 'bye';
    }
}

showMessage2('salut2');
?>
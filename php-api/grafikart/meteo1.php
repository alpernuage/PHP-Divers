<?php 
$curl = curl_init('http://api.openweathermap.org/data/2.5/weather?q=London&appid=004b3324b51f7e0a40160c442f7f6824&units=metric&lang=fr');

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 1
]);

//Le résultat ne s'affichera plus. Il sera sauvegardé dans le variable $HTTP_RAW_POST_DATA
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 

// Si un problème de ssl s'affiche cette fonction peut être une solution alternative mais déconséillée. Parce que cela enlève le protocol ssl de https et crée une faille de sécurité
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// Télécharger une certificat est une meilleur solution


$data = curl_exec($curl);

if ($data === false) {
    var_dump(curl_error($curl));
} else {
    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
        $data = json_decode($data, true);
        echo 'il fait ' . $data['main']['temp'] . '°C';
    }
}

curl_close($curl);

?>
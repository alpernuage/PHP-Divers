<?php
require_once 'class/OpenWeather.php';
$weather = new OpenWeather('004b3324b51f7e0a40160c442f7f6824');
$forecast = $weather->getForecast();

require 'elements/header.php';

?>

<div class="container">
    <ul>
        <?php foreach ($forecast as $hour) : ?>
            <li><?= $hour['temp'] ?></li>
        <?php endforeach ?>
    </ul>
</div>

<?php require 'elements/footer.php'; ?>
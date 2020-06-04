<?php 
include_once __DIR__ . '/classes/movie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Titolo: " . "$movie1->title <br>";
    echo "Regista: " . "$movie1->director <br>";
    echo "Lingua originale: " . "$movie1->language <br>";
    echo "Durata: " . "$movie1->duration <br>";
    echo "Posto assegnato: " . "{$movie1->seatAssign(30)} <br>";
    ?>
</body>
</html>
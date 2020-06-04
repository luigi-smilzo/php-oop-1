<?php 
include_once __DIR__ . '/classes/movie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Movie OOP</title>
</head>
<body>
    <div>
        <h3>#1</h3>
        <?php 
        echo "Titolo: " . "$movie1->title <br>";
        echo "Regista: " . "$movie1->director <br>";
        echo "Lingua originale: " . "$movie1->language <br>";
        echo "Durata: " . "$movie1->duration <br>";
        echo "Posto assegnato: " . "{$movie1->seatAssign(30)} <br>";
        ?>
    </div>

    <div>
        <h3>#2</h3>
        <?php 
        echo "Titolo: " . "$movie2->title <br>";
        echo "Regista: " . "$movie2->director <br>";
        echo "Lingua originale: " . "$movie2->language <br>";
        echo "Durata: " . "$movie2->duration <br>";
        echo "Posto assegnato: " . "{$movie2->seatAssign(30)} <br>";
        ?>
    </div>
</body>
</html>
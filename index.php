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
        $movie1->print();
        ?>
    </div>

    <div>
        <h3>#2</h3>
        <?php 
        $movie2->print();
        ?>
    </div>
    
</body>
</html>
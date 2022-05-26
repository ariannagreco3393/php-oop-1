<?php
require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie('gameOfThrones', '2015'),
    new Movie('avatar', '2001'),
];
//var_dump($movie);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <div class="movie">
        <?php foreach ($movies as $movie) : ?>
            <h2><?php echo $movie->title ?></h2>
            <p><?php echo $movie->year ?></p>
        <?php endforeach ?>
    </div>
</body>

</html>
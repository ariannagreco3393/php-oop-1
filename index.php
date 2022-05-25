<?php
/**
 * this class is for Movie
 * @author Arianna Greco
 * @copyright 2022 Arianna Greco
 * @license MIT (aggiungere link alla licenza)
 */

class Movie {
    public $title;
    public $year;


      /**
     * function constructor
     * @param title the name of the film
     */
    function __construct(String $title, String $year)
    {
        $this->title = $title;
        $this->year = $year;
    }
}

$gameOfThrones = new Movie('gameOfThrones', '2015' );
$avatar = new Movie('avatar', '2001' );

var_dump($gameOfThrones, $avatar);

/* echo $gameOfThrones->title = 'game Of Thrones';
echo $gameOfThrones->year = '2015';


echo $avatar->title = 'Avatar';
echo $avatar->year = '2001'; */
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
        <h2><?php echo $gameOfThrones->title = 'game Of Thrones';  ?></h2>
        <p><?php echo $gameOfThrones->year = '2015'; ?></p>
        <h2><?php echo $avatar->title = 'Avatar'; ?></h2>
        <p><?php echo $avatar->year = '2001'; ?></p>
    </div>
</body>
</html>
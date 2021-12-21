<?php 

class Movie {
  public $title;
  public $plot;
  public $produce;
  public $characters;
  public $actors;
  public $soundtrack;
  public $awards;
  public $distribution;
  

  function __construct( $title, $plot, $produce, $characters, $actors, $soundtrack, $awards, $distribution){

    $this->title = $title;
    $this->plot = $plot;
    $this->produce = $produce;
    $this->characters = $characters;
    $this->actors = $actors;
    $this->soundtrack = $soundtrack;
    $this->awards = $awards;
    $this->distribution = $distribution;

  }

  public function getFilm() {

    $film= [
      $this->title,
      $this->plot,
      $this->characters,
      $this->soundtrack
    ];
    return $film;
  }

}
$movie_1 = new Movie('SpiderMan-No-Way-Home','lorem pixum ragnum modificatium', 'Jon Watts','Spiderman, Dr Strange, Mj','Gino,Pino,Dino','la soundtrack del film','dei premi a caso','Warner Bros');

$movie_2 = new Movie('Full Metal Alchemist - Brotherhood','Madre = 1 braccio + 1 gamba + Alphonse', 'Hiromu Arakawa','Ed,Aplhonse,King Bradley,Piccolo uomo dentro un ampolla','Ed, Alphonse, King Bradley, Un Ampolla','la soundtrack epica','tutti i premi a caso','Panini Video s.r.l');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Films :</h1>

  <h2>SpiderMan No Way Home</h2>
  <ul>
    <?php foreach ($movie_1->getFilm() as $film) : ?>
    <li><?= $film ?></li>
    <?php endforeach ?>  
  </ul>

  <h2>Full Metal Alchemist - Brotherhood</h2>
  <ul>
    <?php foreach ($movie_2->getFilm() as $film) : ?>
    <li><?= $film ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>
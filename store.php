<?php

  $game1 = new Game('Call of Duty 4', 45.95);
  $game2 = new Game('GTA V', 55.95);
  $game3 = new Game('FIFA 20', 65.00);

  $gemiddeldePrijs;




  $gameList = array($game1, $game2, $game3);

  echo var_dump($gameList);

  foreach($gameList as $game)
  {
    $gemiddeldePrijs =  $game->prijs + $gemiddeldePrijs;
  }

  echo "\n" . "\n" . 'De gemiddle prijs van alle games bij elkaar is: €' .  $gemiddeldePrijs . "\n" . "\n";





  class Game
  {

    public $titel;
    public $prijs;

    function __construct($titel, $prijs)
    {
      $this->titel = $titel;
      $this->prijs = $prijs;
    }


  }




 ?>

<?php
    $cards = file_get_contents('js/AllCards.json');
    $decodedCards = json_decode($cards, true);
    $fullCard = array_keys($decodedCards);
    $cardsCount = count($decodedCards);
    echo  print_r($decodedCards[0],true);


?>
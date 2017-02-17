<?php
    $cards = file_get_contents('js/AllCards.json');
    $decodedCards = json_decode($cards, true);
    $fullCard = array_keys($decodedCards);

    $cardCount = count($fullCard);
   

?>
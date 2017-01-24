<?php
    $cards = file_get_contents('js/AllCards.json');
    $decodedCards = json_decode($cards, true);
    
    echo '<pre>' . print_r($decodedCards, true) . '</pre>';

?>
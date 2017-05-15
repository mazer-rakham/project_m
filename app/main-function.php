<?php
    $cards = file_get_contents('js/AllCards.json');
    $decodedCards = json_decode($cards, true);
    $fullCard = array_keys($decodedCards);
    $cardCount = count($fullCard);
   ?>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
    var autoCompleteForAllCards =  new Array();
       <?php for ($i = 0; $i < $cardCount; $i++){ ?>
               autoCompleteForAllCards.push(<?php echo json_encode($decodedCards[$fullCard[$i]]['name']) ?>)
       <?php } ?>
       $('#allCardSearch').autocomplete({
           max:10,
           minLength:3,
           source: autoCompleteForAllCards,
           select: function(event, ui) {
              var cardSelected = ($.inArray(ui.item.value, autoCompleteForAllCards));
              alert(<?php echo $decodedCards[$fullCard[cardSelected]]['name'] ?>);
         }        
       });       
});
</script>

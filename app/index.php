<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="/css/jquery-ui.css" type="text/javascript" rel="stylesheet" />
     
    <link href="/css/main-stylesheet.css" rel="stylesheet" type="text/css" />
    <script   src="https://code.jquery.com/jquery-2.2.2.js"   integrity="sha256-4/zUCqiq0kqxhZIyp4G0Gk+AOtCJsY1TA00k5ClsZYE="   crossorigin="anonymous"></script> 
<script src="/js/jquery-ui.min.js"></script>
</head>

<body>
    <?php 
        require 'main-function.php';
        ?>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav id="main-nav">
        <a id="test">Your Cards</a>
        <a>All Cards</a>
        <a>Wish List</a>
        <a>Your Decks</a>
        <a>Deck Builder</a>
        <a>Settings</a>
        <h2>Card Total:<br />13244.44</h2>
    </nav>
    <section id="search-and-filter">
        <input type="text" class="search" id="allCardSearch" />Ex: Balefire Dragon
    </section>
    <article id="main-area">
        <article id="all-cards-wrapper">
            <?php
            //  for ($i = 0; $i < $cardCount; $i++ ){
            //    echo"<div class='cards'>" . $decodedCards[$fullCard[$i]]['name'] . "</div>";
            // }
        
               
            ?>
        </article>
    </article>
    <?php 
        
        require 'footer.php';
        
         ?>
</body>

</html>
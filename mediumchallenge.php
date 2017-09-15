<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
        //same fuction from normal right here
             function createDeck() {
                    $suits = array ("Clubs", "Diamonds", "Hearts", "Spades");
                    $faces = array (
                         "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                         "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
                $deck = array();
            
           foreach ($suits as $suit) {
            foreach ($faces as $face => $value) {
                    $deck[] = array ("face"=>$face, "suit"=>$suit,"value"=> $value);
    }
}
       $shuffled_deck = shuffle($deck);
        $card = array_shift($deck);
        
              }
               
                // made a function to deal cards to each player
                // change function so that it returns the # of cards given to the player
                // and it must change the deck so that the cards are no longer available to be given out.
            
           
            function dealCards(&$deck, $numCards) {
              createDeck();
              for($i = 0; $i < $numCards; $i++){
                  $randsuit = rand(0,3);
                    $randcard = rand(0,12); 
                         if( isset($setCards[$suit[$randsuit].$card[$randcard]]) ) {
                                 $i--;
                                continue;
              }
               
                return $numCards;
                
            }
            }
        
          $player = dealCards($deck,4);
          echo $player;
          
          // MEDIUM:
          //   Let’s bring in the deck code from the past example (your normal challenge).
          //   Create a function that will create a deck of cards, randomize it and then return the deck.
          //   We will now create a function to deal these cards to each user. Modify this function so that it returns the number of cards specified for the user. Also, it must modify the deck so that those cards are no longer available to be distributed.
                
        ?>

    </p>

    </body>
</html>
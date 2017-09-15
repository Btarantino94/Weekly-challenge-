<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            
            // createDeck and dealCards function from other challenges
            //    For the secific # of players give each one a even bunch of cards.
            //    do this by counting how many players there are. count how many cards
            //    are in the deck. then divide them so you know how many cards each player should get
             
             function createDeck() {
                $deck = array();
                $suits = array ("clubs", "diamonds", "hearts", "spades");
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
                    );
                    
                foreach($suits as $suit){
                    foreach($faces as $face => $value){
                        $deck[] = array($suit => array($face => $value));
                    }
                }
                shuffle($deck);
                return $deck;
              }
              
             function dealCards(&$deck, $numCards = 0) {
                $setOfCards;
                $i = 0;
                $count = 0;
                while($count != $numCards){
                    $setOfCards[] = $deck[$i];
                    array_shift($deck);
                    $count++;
                }
                return $setOfCards;
            }
               $deck = createDeck();
               $numPlayers = 4;
               $cardsnDeck = count($deck);
               //find a function to count the # of elements in a array
               $cardForPlayer = divCards($cardsnDeck, $numPlayers);
                
                //  for loop to add the "given hands" to the $players array
                
                  $players = array(); 
                 
                 
                 function divCards($deck_count, $playerCount){
                 
                 if($deck_count % $playerCount !== 0){
                     $newDeckCount = $deck_count - ($deck_count % $playerCount);
                     return ($newDeckCount / $playerCount);
                 } else {
                     return ($deck_count / $playerCount);
                 }
             }
            
               $deck = createDeck();
               $numPlayers = 4;
               $cardsnDeck = count($deck);

               $cardForPlayer = divCards($cardsnDeck, $numPlayers);
                
                 
                
                  $players = array(); 
                   for($i = 0; $i < $numPlayers; $i++) {
                       $players[] = dealCards($deck, $cardForPlayer);
                       
                   }
                   
               
         // HARD:
         //    Bring in your createDeck and dealCards function from the previous challenges. For the specified number of players below, assign each player an even set of cards.
         //    We will do this by counting out how many players there are, counting how many cards are in the deck and then dividing them so we know how many cards each player should get.
              
         //      $deck =
         //      $num_players = 4;
         //      $num_cards_in_deck = //find a function to count the # of elements in an array
         //      $num_cards_to_give_each_player =
              
         //    Use a for loop to add the "dealt hands" to the $players array
         //    Let’s create a simple game. Each player will play a card and whoever has the highest value wins. If there are 2 cards played that have the same value, everyone loses and that round is a draw. Store the results of each game and also who won that round as the value.
         //    If the round is a draw, store the value as DRAW. Use a loop to play each game until all opponents are out of cards. Print out the array of all the rounds. If there was a draw, the round should say DRAW.
         //    If a player has won, it should displayer “Player X” where X is the index of the player.
                
               
              $round_winners = 
        ?>

    </p>

    </body>
</html>
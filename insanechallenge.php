<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            
            // INSANE CHALLENGE: 

            //     Create a game of Blackjack.
            //     Rules:
            //     1. At any given time, there will only be two players. The dealer and player one.
            //     2. 4 cards will be dealt out each round, 2 to the dealer and 2 to the player.
            //     3. If the amount in the player’s hand is less than or equal to the amount in the dealer’s hand, you must draw a card.
            //     4. If the player draws a card and the amount they have goes over 21, the dealer has won that round.
            //     5. If the player ever reaches an amount greater than the dealer’s, they should stay then it will be the dealer’s turn.
            //     6. The dealer must draw until he reaches an amount greater than the player’s or until he loses.
            //     7. Subtract $100 from the player’s bank every time they lose
            //     8. Add $200 to the player’s bank every time they win
            //     9. Player starts with $1000 in the bank account
            //     10. Aces can either be an 11 or 1
            //     The game will continue as long as there are enough cards in the deck OR the player runs out of money.
            //     Output:
            //     1. How many games were played?
            //     2. Who won the game?
            //     3. Which round did the player’s bank reach half way?
            //     4. How many times did the player get blackjack?
                  
            //     EXTRA CREDIT:
            //     Create a function called countCards and enable it for the player, NOT the dealer. This function must analyze the deck and determine if the player should draw again even if the amount in his hand is greater than the dealer.
            //     EX: If the dealer has a sum of 9 on the table, you might have two 6’s (12 total). Player should draw again because it is more likely the dealer can beat your 12.
             
             
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
               
              $round_winners = 
        ?>

    </p>

    </body>
</html>
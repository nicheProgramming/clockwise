<?php
    require('functions.php');
    
    function rollDice() {
        $die1 = rand(1,6);
        $die2 = rand(1,6);
        $die3 = rand(1,6);
        $die4 = rand(1,6);
        $die5 = rand(1,6);
        $roll = $die1 + $die2 + $die3 + $die4 + $die5;
        return $roll;
    }
    
    
    function turn($player, $playerScore) {
        $roll = rollDice();
        $mod = $roll % 2;
        
        if($roll >= 20 && $mod == 0) {
    		$playerScore--;
    	} else if($roll >= 20 && $mod != 0) {
    		$playerScore++;
    	} else if($roll <= 19 && $mod == 0) {
    		$playerScore++;
    	} else if($roll <= 19 && $mod != 0) {
    		$playerScore--;
    	}
    	//This line needs to be called ON THE GAME PAGE AFTER EVERY TURN.
        echo $player . " rolled " . $roll . ", changing his score to " . $playerScore . ".";
    }
?>
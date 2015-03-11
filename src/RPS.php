<?php

    class RPS
    {

        function rpsResult($input1, $input2)
        {
            // Control users input capitalization
            $input1 = ucfirst(strtolower($input1));
            $input2 = ucfirst(strtolower($input2));

            // Declare Winners and Draw (when both users input the same thing)
            if($input1 == $input2) {

                return "DRAW!";

            } elseif ($input1 == "Rock" && $input2 == "Paper" || $input1 == "Scissors" && $input2 == "Rock" || $input1 == "Paper" && $input2 == "Scissors") {

                return "Player 2 Wins!";

            } elseif ($input1 == "Paper" && $input2 == "Rock" || $input1 == "Rock" && $input2 == "Scissors" || $input1 == "Scissors" && $input2 == "Paper") {

                return "Player 1 Wins!";

            }
        }

        function rpsSinglePlayer()
        {
            $random = rand(1, 3);

            if ($random == 1) {
                $input_2 = "rock";
            } elseif ($random == 2) {
                $input_2 = "paper";
            } elseif ($random == 3) {
                $input_2 = "scissors";
            }

            return $input_2;
            
        }
    }

?>

<?php

    require_once "src/RPS.php";

    class RPSTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_rock()
        {
            //Arrange
            $test_RockPaperScissors = new RPS;
            $user_1 = "rock";
            $user_2 = "rock";

            //Act
            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            //Assert
            $this->assertEquals("DRAW!", $result);
        }

        function test_CapsDraw()
        {
            //Arrange
            $test_RockPaperScissors = new RPS;
            $user_1 = "ROCK";
            $user_2 = "rock";

            //Act
            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            //Assert
            $this->assertEquals("DRAW!", $result);
        }

        function test_Draw()
        {
            //Arrange
            $test_RockPaperScissors = new RPS;
            $user_1 = "paper";
            $user_2 = "paper";

            //Act
            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            //Assert
            $this->assertEquals("DRAW!", $result);
        }

        function test_rockVSscissors()
        {
            //Arrange
            $test_RockPaperScissors = new RPS;
            $user_1 = "rock";
            $user_2 = "scissors";

            //Act
            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            //Assert
            $this->assertEquals("Player 1 Wins!", $result);
        }

        function test_scissorsVSrock()
        {
            $test_RockPaperScissors = new RPS;
            $user_1 = "scissors";
            $user_2 = "rock";

            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            $this->assertEquals("Player 2 Wins!", $result);
        }

        function test_rockVSpaper()
        {
            $test_RockPaperScissors = new RPS;
            $user_1 = "paper";
            $user_2 = "rock";

            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            $this->assertEquals("Player 1 Wins!", $result);
        }

        function test_UserWins1_RockVSPaper()
        {
            $test_RockPaperScissors = new RPS;
            $user_1 = "rock";
            $user_2 = "paper";

            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            $this->assertEquals("Player 2 Wins!", $result);
        }

        function test_UserWins2_RockVSPaper()
        {
            $test_RockPaperScissors = new RPS;
            $user_1 = "paper";
            $user_2 = "rock";

            $result = $test_RockPaperScissors->rpsResult($user_1, $user_2);

            $this->assertEquals("Player 1 Wins!", $result);
        }


    }

?>

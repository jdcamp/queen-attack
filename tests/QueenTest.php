<?php
require_once "src/Queen.php";

class QueenTest extends PHPUnit_Framework_TestCase
{
    function test_checkQueen_false()
    {
        $test_CheckQueen = new Queen;
        $inputQueenX = 2;
        $inputQueenY = 1;
        $inputOpponentX = 4;
        $inputOpponentY = 2;

        $result = $test_CheckQueen->canQueenAttack($inputQueenX, $inputQueenY, $inputOpponentX, $inputOpponentY);

        $this->assertEquals(True, $result);
    }
}


?>

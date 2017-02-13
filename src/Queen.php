<?php
    class Queen {
        function canQueenAttack($queenX, $queenY, $opponentX, $opponentY)
        {
            if($queenX == $opponentX) {
                return True;
            } elseif ($queenY == $opponentY) {
                return True;
            } elseif (($queenX - $queenY) == ($opponentX - $opponentY)) {
                return True;
            } else {
                return False;

            }

        }




    }
 ?>

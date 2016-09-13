<?php
    class Coin
    {
        function calcCoins($input)
        {
            $quarters = floor($input / 25);
            $dimes = floor(($input % 25) / 10);
            $nickels = floor((($input % 25) % 10) / 5);
            $pennies = $input - ($quarters * 25) - ($dimes * 10) - ($nickels * 5);
            $returnArray = array($quarters, $dimes, $nickels, $pennies);
            return $returnArray;
        }
    }
?>

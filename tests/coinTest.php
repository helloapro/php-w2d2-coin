<?php
    require_once "src/coin.php";
    class coinTest extends PHPUnit_Framework_TestCase
    {

        function test_calc_coins()
        {
            $test_calc_coins = new Coin;
            $input = 114;

            $output = $test_calc_coins->calcCoins($input);

            $this->assertEquals([4, 1, 0, 4], $output);
        }

    }
?>

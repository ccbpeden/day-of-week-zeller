<?php
    require_once __DIR__."/../src/Dayfinder.php";

    Class DayfinderTest extends PHPUnit_Framework_TestCase
    {
        function test_FindDay()
        {
            $input = "2017-02-16";
            $newDay = New Dayfinder($input);

            $result = $newDay->FindDay($input);
            $this->assertEquals("Thursday", $result);
        }

        function test_constructor()
        {
            $input = "2017-02-16";
            $newDay = New Dayfinder($input);

            $result = array($newDay->getDay(), $newDay->getShiftMonth(),$newDay->getCentury(),$newDay->getShiftYear());

            $this->assertEquals(array(16,14,20,16),$result);
        }
    }
 ?>

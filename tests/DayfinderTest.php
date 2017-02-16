<?php
    require_once __DIR__."/../src/Dayfinder.php";

    Class DayfinderTest extends PHPUnit_Framework_TestCase
    {
        function test_setDayOfWeek()
        {
            $input = "2017-02-16";
            $new_day = New Dayfinder($input);
            $new_day->setDayOfWeek();

            $result = $new_day->getDayOfWeek();
            $this->assertEquals("Thursday", $result);
        }

        function test_constructor()
        {
            $input = "2017-02-16";
            $new_day = New Dayfinder($input);

            $result = array($new_day->getDay(), $new_day->getShiftMonth(),$new_day->getCentury(),$new_day->getShiftYear());

            $this->assertEquals(array(16,14,20,16),$result);
        }
    }
 ?>

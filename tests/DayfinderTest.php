<?php
    require_once __DIR__."/../src/Dayfinder.php";

    Class DayfinderTest extends PHPUnit_Framework_TestCase
    {
        function test_FindDay()
        {
            $newDay = New Dayfinder;
            $input = "2017-02-16";

            $result = $newDay->FindDay($input);
            $this->assertEquals("Thursday", $result);
        }
    }
 ?>

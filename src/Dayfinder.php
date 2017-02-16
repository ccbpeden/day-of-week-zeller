<?php
  Class DayFinder
  {
    private $day;
    private $shift_month;
    private $century;
    private $shift_year;
    private $day_of_week;

    function getDay()
    {
      return $this->day;
    }

    function getShiftMonth()
    {
      return $this->shift_month;
    }

    function getCentury()
    {
      return $this->century;
    }

    function getShiftYear()
    {
      return $this->shift_year;
    }

    function getDayOfWeek()
    {
      return $this->day_of_week;
    }


    function findDay()
    {
        //
        $monthValue = ["Jan"];
    }

    function __construct($input_date)
    {
        $this->century = (int)substr($input_date, 0, 2);
        $input_month = (int)substr($input_date, 5, 2);
        if ($input_month < 3)
        {
            $this->shift_month = $input_month + 12;
            $this->shift_year = (int)substr($input_date, 2, 2) - 1;
        } else {
            $this->shift_month = $input_month;
            $this->shift_year = (int)substr($input_date, 2, 2);
        }
        $this->day = (int)substr($input_date, 8, 2);

        // input of type "yyyy-mm-dd"

    }

  }
?>

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

    function setDayOfWeek()
    {
        $week_day_number = ($this->day + floor((13*($this->shift_month + 1))/5 ) + $this->shift_year + floor($this->shift_year/4) + floor($this->century/4) - (2 * $this->century))%7;
        $week_day_names = array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
        $this->day_of_week = $week_day_names[$week_day_number];
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

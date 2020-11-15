<?php

class WageCalculator
{
    private $_wage;
    private $_is_monthlyWage;

    public function __construct($_wage, $_is_monthlyWage = true)
    {
        $this->_wage = $_wage;
        $this->_is_monthlyWage = $_is_monthlyWage;
    }

    public function getHourlyWage()
    {
        if ($this->_is_monthlyWage === true) {
            return $this->_wage / 160;
        } else {
            return $this->_wage;
        }
    }

    public function getMontlyWage()
    {
        if ($this->_is_monthlyWage === true) {
            return $this->_wage;
        } else {
            return $this->_wage * 160;
        }
    }
}

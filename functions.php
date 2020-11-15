<?php

require_once './WageCalculator.php';

function chooseOption()
{
    $output = '';

    if ($_GET['option'] === 'hourly') {
        $output = "Enter your salary:";
        return $output;
    } elseif ($_GET['option'] === 'monthly') {
        $output = "Enter your hourly wage:";
        return $output;
    }
}

function chooseTitle()
{
    $title = '';

    if ($_GET['option'] === 'hourly') {
        $title = "Your hourly wage is:";
    } elseif ($_GET['option'] === 'monthly') {
        $title = "Your monthly salary is:";
    }
    return $title;
}

function calculateResult()
{
    if ($_GET['option'] === 'hourly') {
        $result = new WageCalculator($_GET['amount']);
        return $result->getHourlyWage();
    } elseif ($_GET['option'] === 'monthly') {
        $result = new WageCalculator($_GET['amount'], false);
        return $result->getMontlyWage();
    }
}

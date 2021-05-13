<?php

/*  validation.php
 *  Validate data for the diner app
 *
 */

function validFood($food)
{
    return strlen(trim($food)) >= 2;
}

//Return true if meal is valid
function validMeal($meal)
{
    return in_array($meal, getMeals());
}

//Return true if *all* condiments are valid
function validCondiments($condiments)
{
    $validCondiments = getCondiments();

    //Make sure each selected condiment is valid
    foreach ($condiments as $userChoice)
    {
        if (!in_array($userChoice, $validCondiments))
        {
            return false;
        }
    }

    //All choices are valid
    return true;
}
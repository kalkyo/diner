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
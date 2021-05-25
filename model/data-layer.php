<?php

/* data-layer.php
 * Return data for the diner app
 *
 */
class DataLayer
{
    // Get the meals for the order form
    static function getMeals()
    {
        return array("breakfast", "brunch", "lunch", "dinner");
    }

    // Get the condiments for the order 2 form
    static function getCondiments()
    {
        return array("ketchup", "mustard", "mayo", "sriracha");
    }
}


/*
 * 1. Help each other
 * 2. Add a getCondiments() function to the Model
 * 3. Modify your Controller to get the condiments
 *    from the Model and send them to the View
 * 4. Modify the View page to display the conds
 */
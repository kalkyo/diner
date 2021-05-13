<?php

/*  validation.php
 *  Validate data for the diner app
 *
 */

function validFood($food)
{
    return strlen(trim($food)) >= 2;
}
<?php

// this is my controller for the diner project

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once ('vendor/autoload.php');


// instantiate fat-free
$f3 = Base :: instance();

// define default routes
$f3->route('GET /' , function ()
{
   // display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

/*$f3->route('GET /breakfast' , function ()
{
    echo "<h1>What's for Breakfast?</h1>";
});*/

// run fat-free
$f3->run();

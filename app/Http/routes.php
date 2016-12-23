<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});


//Route to get the balance of a account
$app->get('/balance', 'PointsController@balance');
//Route  to credit points from a account
$app->post('/credit', 'PointsController@credit');
//Route  to debit points from a account
$app->post('/debit', 'PointsController@debit');



//Route  to debit points from a account
$app->get('/test/{account_id}', 'PointsController@test');

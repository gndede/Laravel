<?php

use Carbon\Carbon;

$app->get('/', function () use ($app){
	

return 'Welcome to the bookings api';

	/* $date = Carbon::now('America/Los_Angeles');
	
	return $date; */

});


// api group
$app->group(['prefix' => 'api'], function($app){
	
	//Category > booking. Each Booking will be categorised in Category
	//a Category is a way to group bookings... i.e appointments, meetings, etc.
	//Category/create 		.. POST .. Create a Category
	//Categories	 		.. GET 	.. ALL Categories
	//Categories/{id}		.. GET 	.. Get specific category
	
	
	
	$app->get('categories', 'App\Http\Controllers\BookingsController@categories');
	
	$app->get('bookings', 'App\Http\Controllers\BookingsController@all');
	
	$app->get('category/{id}', 'App\Http\Controllers\BookingsController@showCategory');
	
	$app->post('category/create', 'App\Http\Controllers\BookingsController@storeCategory');
	
	$app->post('category/{id}/booking/create', 'App\Http\Controllers\BookingsController@storeBooking');
}
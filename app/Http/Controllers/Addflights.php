<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flight;

class FlightsController extends Controller
{
   public function add()
	{
		//return view("welcome");
		//$car = Car::all //retrieve all cars
		$flight = new Flight;
		$flight->flightname = 'Boing';
		$flight->save();
		$flight->flightname = 'Indian Airlines';
		$flight->save();
        //return view('show', array('car' => $car));
		return "Created 2 flights";
	}

}

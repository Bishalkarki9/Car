<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function addCars()
    {
        for ($i = 1; $i <= 10; $i++) {
            $car = new Car();
            $car->make = 'Car Make ' . $i;
            $car->model = 'Car Model ' . $i;
            $car->year = '2022';
            $car->mileage = 0;
            $car->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
            $car->save();
        }
        
        return '10 cars added to the database.';
    }
}

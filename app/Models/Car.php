<?php

use App\Models\Car;

// Create a new Car model instance
$car = new Car();

// Set the car's attributes
$car->make = 'Toyota';
$car->model = 'Corolla';
$car->year = '2021';
$car->mileage = 5000;
$car->description = 'This is a great car for commuting.';

// Save the car to the database
$car->save();


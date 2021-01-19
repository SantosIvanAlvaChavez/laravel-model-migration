<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    /**
     * HOMEPAGE
     */
    public function index() {

        //Get data from DB
        $cars = Car::all();

        //$cars = Car::where('marca', '!=', 'Ford')
        //->orderBy('modello', 'asc')
        //->limit(2)
        //->get();
        //dump($cars);

        // FIRST
        //$cars = Car::where('marca', '!=', 'Ford')->first();

        // FIND
        //$car = Car::find(1);
        //dump($car);
        return view('home', compact('cars'));
    }
}

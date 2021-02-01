<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    // public function home (){
    //
    //   return view ('pages.home');
    //
    // }
    public function index(){
       $cars = Car::all();
       return view('pages.home',compact('cars'));
    }
    public function show($id){
       $car = Car::findOrFail($id);
       return view ('pages.car', compact('car'));

    }
    public function create() {
       return view('pages.car-create');
    }
    public function store(Request $request) {

        // $newCar = new Car;
        // $newCar -> name = $request -> get('name');
        // $newCar -> model = $request -> get('model');
        // $newCar -> price = $request -> get('price');
        // $newCar -> consumption = $request -> get('consumption');
        // $newCar -> save();
        // return redirect() -> route('car-index');

        Car::create($request -> all());
        return redirect() -> route('car-index');
    }
}

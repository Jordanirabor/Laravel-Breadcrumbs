<?php

namespace App\Http\Controllers;
use App\Continent;
use App\Country;
use App\City;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

     public function continent($name){
           $continent = Continent::where('name', $name)->first();
        return view('continent', compact('continent'));
    }

     public function country($name){
           $country = Country::where('name', $name)->first();
        return view('country', compact('country'));
    }

     public function city($name){
           $city = City::where('name', $name)->first();
        return view('city', compact('city'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tower;

class MapsController extends Controller
{
    public function index(){
        $towers = Tower::all()->take(30);
        return view('map')->with('towers', $towers);
    }
    public function main(){
        $towers = Tower::all()->take(30);
        $atcdata = Tower::where('company', 'ATC TOWER')
                    ->take(10)
                    ->get();
        $eatondata = Tower::where('company', 'EATON TOWERS GHANA LIMITED')
                    ->take(10)
                    ->get();
        $millidata = Tower::where('company', 'MILLICOM GHANA LIMITED')
                    ->take(10)
                    ->get();
        $htgdata = Tower::where('company', 'HTG MANAGED SERVICES LIMITED')
                    ->take(10)
                    ->get();
        $airdata = Tower::where('company', 'AIRTEL GHANA LIMITED')
                    ->take(10)
                    ->get();
        $godata = Tower::where('company', 'GO TELEVISION')
                    ->take(10)
                    ->get();
        $mtndata = Tower::where('company', 'SCANCOM/MTN GHANA LIMITED')
                    ->take(10)
                    ->get();
        return view('main')->with('towers', $towers)
                        ->with('atcdata', $atcdata)
                        ->with('eatondata', $eatondata)
                        ->with('millidata',$millidata)
                        ->with('htgdata', $htgdata)
                        ->with('airdata', $airdata)
                        ->with('godata', $godata)
                        ->with('mtndata', $mtndata);
    }
}

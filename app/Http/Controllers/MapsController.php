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
        $atcdata = Tower::where('tower_owner', 'ATC')
                    // ->take(10)
                    ->get();
        $eatondata = Tower::where('tower_owner', 'EATON')
                    // ->take(10)
                    ->get();
        $helios = Tower::where('tower_owner', 'HELIOS')
                    // ->take(10)
                    ->get();
        $glo = Tower::where('tower_owner', 'Glomobile')
                    // ->take(10)
                    ->get();
        $ecoband = Tower::where('tower_owner', 'Ecoband')
                    // ->take(10)
                    ->get();
        $aft = Tower::where('tower_owner', 'AFT')
                    // ->take(10)/
                    ->get();
        $mtn = Tower::where('tower_owner', 'MTN')
                    // ->take(10)
                    ->get();
        $mainone = Tower::where('tower_owner', 'Mainone')
                    // ->take(10)
                    ->get();
        $national = Tower::where('tower_owner', 'NATIONAL SECURITY')
                    // ->take(10)
                    ->get();
        $bbh = Tower::where('tower_owner', 'BBH')
                    // ->take(10)
                    ->get();
        $vf = Tower::where('tower_owner', 'VF')
                    // ->take(10)
                    ->get();
        $nita = Tower::where('tower_owner', 'NITA')
                    // ->take(10)
                    ->get();
        return view('main')->with('towers', $towers)
                        ->with('atcdata', $atcdata)
                        ->with('eatondata', $eatondata)
                        ->with('helios',$helios)
                        ->with('glo', $glo)
                        ->with('ecoband', $ecoband)
                        ->with('aft', $aft)
                        ->with('mtn', $mtn)
                        ->with('mainone', $mainone)
                        ->with('national', $national)
                        ->with('bbh', $bbh)
                        ->with('vf', $vf)
                        ->with('nita', $nita);
                        
    }
}

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
        $disc = Tower::where('tower_owner', 'DiscoveryTel')
                    // ->take(10)
                    ->get();
        $gcb = Tower::where('tower_owner', 'GCB')
                    // ->take(10)
                    ->get();
        $iburst = Tower::where('tower_owner', 'Iburst')
                    // ->take(10)
                    ->get();
        $iss = Tower::where('tower_owner', 'Internet Solutions')
                    // ->take(10)
                    ->get();
        $stl = Tower::where('tower_owner', 'STL')
                    // ->take(10)/
                    ->get();
        $surf = Tower::where('tower_owner', 'Surfline')
                    // ->take(10)
                    ->get();
        $voda = Tower::where('tower_owner', 'Vodafone')
                    // ->take(10)
                    ->get();
        $third = Tower::where('tower_owner', '3rd Party')
                    // ->take(10)
                    ->get();
        $gifec = Tower::where('tower_owner', 'GIFEC')
                    // ->take(10)
                    ->get();
        $gloo = Tower::where('tower_owner', 'GLO')
                    // ->take(10)
                    ->get();
        $super = Tower::where('tower_owner', 'SUPERTECH')
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
                        ->with('nita', $nita)
                        ->with('disc', $disc)
                        ->with('third', $third)
                        ->with('gifec',$gifec)
                        ->with('gloo', $gloo)
                        ->with('super', $super)
                        ->with('gcb', $gcb)
                        ->with('iss', $iss)
                        ->with('stl', $stl)
                        ->with('surf',$surf)
                        ->with('voda', $voda)
                        ->with('iburst', $iburst);
                        
                        
    }
}

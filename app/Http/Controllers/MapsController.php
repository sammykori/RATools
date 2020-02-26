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
        $towers = Tower::all();
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
        $accra = Tower::where('region', 'Greater Accra')
                    // ->take(10)
                    ->get();
        $ashanti = Tower::where('region', 'Ashanti')
                    // ->take(10)
                    ->get();
        $west = Tower::where('region', 'Western')
                    // ->take(10)
                    ->get();
        $east = Tower::where('region', 'Eastern')
                    // ->take(10)
                    ->get();
        $volta = Tower::where('region', 'Volta')
                    // ->take(10)
                    ->get();
        $central = Tower::where('region', 'Central')
                    // ->take(10)
                    ->get();
        $ba = Tower::where('region', 'Brong Ahafo')
                    // ->take(10)
                    ->get();
        $north = Tower::where('region', 'Northern')
                    // ->take(10)
                    ->get();
        $uw = Tower::where('region', 'Upper West')
                    // ->take(10)
                    ->get();
        $ue = Tower::where('region', 'Upper East')
                    // ->take(10)
                    ->get();
        return view('new')->with('towers', $towers)
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
                        ->with('iburst', $iburst)
                        ->with('accra', $accra)
                        ->with('ashanti', $ashanti)
                        ->with('west', $west)
                        ->with('east',$east)
                        ->with('volta', $volta)
                        ->with('central', $central)
                        ->with('ba', $ba)
                        ->with('north', $north)
                        ->with('uw', $uw)
                        ->with('ue',$ue);
                        
                        
                        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Tower; 

class TowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $towers = DB::table('towers')->orderBy('created_at', 'desc')->get();
        return view('dashboard')->with('towers', $towers);
    }

    /**
     * Show the form for creating a new resource.JJK
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'system' => 'required',
            'towerId' => 'required',
            'towerOwner' => 'required',
            'towerName' => 'required',
            'district' => 'required',
            'region' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'coverage' => 'required',
            'siteCount' => 'required'

        ]);
        //Create Nwe Tower
        $tower = new Tower;
        $tower->system_code = $request->system;
        $tower->tower_id = $request->towerId;
        $tower->tower_owner = $request->towerOwner;
        $tower->tower_name = $request->towerName;
        $tower->district = $request->district;
        $tower->region = $request->region;
        $tower->latitude = $request->lat;
        $tower->longitude = $request->lng;
        $tower->coverage = $request->coverage;
        $tower->site_count = $request->siteCount;
        $tower->user_id = 0;

        $tower->save();

        return redirect('/dashboard')->withSuccess('New Tower Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

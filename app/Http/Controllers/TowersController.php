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
    public function index()
    {
        //
        $towers = DB::table('towers')->orderBy('created_at', 'desc')->paginate(15);
        return view('tables')->with('towers', $towers);
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
            'siteId' => 'required',
            'company' => 'required',
            'district' => 'required',
            'location' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'status' => 'required'

        ]);
        //Create Nwe Tower
        $tower = new Tower;
        $tower->company = $request->company;
        $tower->site_id = $request->siteId;
        $tower->district = $request->district;
        $tower->location = $request->location;
        $tower->lat = $request->lat;
        $tower->lng = $request->lng;
        $tower->status = $request->status;
        $tower->user_id = 0;

        $tower->save();

        return redirect('/tables')->withSucess('New Tower Created Successfully');
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

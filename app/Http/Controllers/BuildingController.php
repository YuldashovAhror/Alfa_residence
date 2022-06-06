<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Phase;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phases = Phase::orderBy('updated_at','desc')->get();
        $buildings = Building::orderBy('updated_at','desc')->get();
        return view('Admin.building.index', [
            'phases' => $phases,
            'buildings' => $buildings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buildings = new Building;
        $buildings->phase_id = $request->phase;
        $buildings->name = $request->name;
        $buildings->save();
        return redirect()->back();

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
        $buildings = Building::find($id);
        $phases = Phase::orderBy('updated_at','desc')->get();

        return view('Admin.building.edit',['buildings'=>$buildings],['phases'=>$phases]);
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
        $buildings = Building::find($id);
        $buildings->phase_id = $request->phase;
        $buildings->name = $request->name;
        $buildings->save();
        return redirect()->Route('building');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buildings = Building::find($id);
        $buildings->delete();
        return redirect()->back();
    }
}

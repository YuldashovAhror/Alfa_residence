<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Phase;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::orderBy('updated_at','desc')->get();
        $buildings = Building::orderBy('updated_at','desc')->get();
        $phases = Phase::orderBy('updated_at','desc')->get();
        return view('Admin.Floor.index', [
            'floors' => $floors,
            'buildings' => $buildings,
            'phases' => $phases
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
        $floors = new Floor;
        $floors->building_id = $request->building_id;
        $floors->phase_id = Building::find($request->building_id)->id;
        $floors->name = $request->name;
        $floors->save();
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
        $floors = Floor::find($id);
        $buildings = Building::orderBy('updated_at','desc')->get();
        $phases = Phase::orderBy('updated_at','desc')->get();

        return view('Admin.Floor.edit', [
            'floors' => $floors,
            'phases' => $phases,
            'buildings' => $buildings
        ]);
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
        $floors = Floor::find($id);
        $floors->phase_id = $request->phase;
        $floors->building_id = $request->building;
        $floors->name = $request->name;
        $floors->save();
        return redirect()->Route('floor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $floors = Floor::find($id);
        $floors->delete();
        return redirect()->back();
    }
}

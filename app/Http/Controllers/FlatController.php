<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Floor;
use App\Models\Phase;
use App\Models\Building;
use App\Models\Type;
use Illuminate\Http\Request;

class FlatController extends Controller
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
        $types = Type::orderBy('updated_at','desc')->get();
        $flats = Flat::orderBy('updated_at','desc')->get();

        return view('Admin.Flat.index',[
            'flats'=>$flats,
            'floors'=>$floors,
            'buildings'=>$buildings,
            'phases'=>$phases,
            'types'=>$types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $floors = Floor::orderBy('updated_at','desc')->get();
        $buildings = Building::orderBy('updated_at','desc')->get();
        $phases = Phase::orderBy('updated_at','desc')->get();
        $types = Type::orderBy('updated_at','desc')->get();

        return view('Admin.Flat.create', [
            'floors' => $floors,
            'buildings' => $buildings,
            'phases' => $phases,
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flat = new Flat;
        $flat->building_id = $request->building;
        $flat->phase_id = $request->phase;
        $flat->floor_id = $request->floor;
        $flat->type_id = $request->type;
        $flat->name = $request->name;
        $flat->size = $request->size;
        $flat->quantity = $request->quantity;
        $flat->save();
        return redirect()->route('flat');
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
        $flats = Flat::find($id);
        $floors = Floor::orderBy('updated_at','desc')->get();
        $buildings = Building::orderBy('updated_at','desc')->get();
        $phases = Phase::orderBy('updated_at','desc')->get();
        $types = Type::orderBy('updated_at','desc')->get();

        return view('Admin.Flat.edit', [
            'flats' => $flats,
            'floors' => $floors,
            'buildings' => $buildings,
            'phases' => $phases,
            'types' => $types
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
        $flat = Flat::find($id);
        $flat->building_id = $request->building;
        $flat->phase_id = $request->phase;
        $flat->floor_id = $request->floor;
        $flat->type_id = $request->type;
        $flat->name = $request->name;
        $flat->size = $request->size;
        $flat->quantity = $request->quantity;
        $flat->save();
        return redirect()->route('flat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flats = Flat::find($id);
        $flats->delete();
        return redirect()->route('flat');
    }
}

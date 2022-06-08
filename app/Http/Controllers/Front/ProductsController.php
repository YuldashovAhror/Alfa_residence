<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Flat;
use App\Models\Floor;
use App\Models\Phase;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('locale') == '') {
        session()->put('locale', 'ru');
        app()->setLocale('ru');
        } else {
        app()->setLocale(session()->get('locale'));
        }
        $lan = session()->get('locale');
        


        $floors = Floor::orderBy('updated_at','desc')->get();
        $buildings = Building::orderBy('updated_at','desc')->get();
        $phases = Phase::orderBy('updated_at','desc')->get();
        $flats = Flat::orderBy('updated_at','desc')->get();
        $types = Type::orderBy('updated_at','desc')->get();
        

        return view('welcome', [
            'floors' => $floors,
            'buildings' => $buildings,
            'phases' => $phases,
            'flats' => $flats,
            'types' => $types,
            'lan' => $lan,
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
        //
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

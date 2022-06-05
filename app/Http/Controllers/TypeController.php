<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('Admin.Type.index',['types'=>$types]);
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
        $types = new Type;
        if($request->has('img')){
            $img_name = Str::random(10).'.'.$request->file('img')->getClientOriginalExtension();
            $request->img->move(public_path('/images/type'), $img_name);
            $types->photo = '/images/type/'.$img_name;
        }
        
        $types->name = $request->name;
        $types->save();
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
        $types = Type::find($id);
        return view('Admin.Type.edit',['types'=>$types]);
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
        $types = Type::find($id);
        if($request->has('img')){
            $img_name = Str::random(10).'.'.$request->file('img')->getClientOriginalExtension();
            $request->img->move(public_path('/images/type'), $img_name);
            $types->photo = '/images/type/'.$img_name;
        }
        
        $types->name = $request->name;
        $types->save();
        return redirect()->route('type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = Type::find($id);
        $types->delete();
        return redirect()->back();
    }
}

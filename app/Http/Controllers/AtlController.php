<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Altss;

class AtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    }
    public function index()
    {
        $articles = Altss::all();
        return view('Alts.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Alts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        
        $bikeway_name = $request ->input('bikeway_name');
        $districts = $request ->input('districts');
        $length = $request ->input('length');
        $surrounding_attractions = $request ->input('surrounding_attractions');

        $Alts = Altss::create([
            'bikeway_name'=>$bikeway_name,
            'districts'=>$districts,
            'length'=>$length,
            'surrounding_attractions'=>$surrounding_attractions]);
            return redirect('Alt');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Alt = Altss::findOrFail($id);
        return view('Alts.show')->with('Alt',$Alt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Alt = Altss::findOrFail($id);
        return view("Alts.edit")->with('Alt',$Alt);
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
        $Alt = Altss::findOrFail($id);

        $data = $request->only([
            'bikeway_name',
            'districts',
            'length',
            'surrounding_attractions',
        ]);

        $Alt->fill($data);
        $Alt->save();
        return redirect('Alt');
    }

        


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Alt = Altss::findOrFail($id);
        $Alt->delete();
        return redirect('Alt');
    }
}
 
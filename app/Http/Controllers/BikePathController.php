<?php

namespace App\Http\Controllers;

use App\Models\BikePath;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;

class BikePathController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bikepaths = BikePath::all();
        //return view('bikepath.index', compact('bikepaths'));
        return view('bikepaths.index')->with('bikepaths', $bikepaths);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bikepaths.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        //
        $data = $request->only([
            'bike_path_name',
            'district',
            'length',
            'nearby_attractions'
        ]);
        $bikepath = BikePath::create($data);
        return redirect('/bikepaths');
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
        $bikepath = BikePath::findOrFail($id);
        return view('bikepaths.show')->with('bikepath',$bikepath);
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
        $bikepath = BikePath::findOrFail($id);
        return view('bikepaths.edit') ->with('bikepath',$bikepath);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateArticleRequest $request, $id)
    {
        $bikepath = BikePath::findOrFail($id);
        $data = $request -> only([
            'bike_path_name',
            'district',
            'length',
            'nearby_attractions'
        ]);
        $bikepath -> fill($data);
        $bikepath -> save();
    return redirect('/bikepaths');
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
        $bikepath = BikePath::findOrFail($id);
        $bikepath ->delete();
        return redirect('/bikepaths');
    }
}

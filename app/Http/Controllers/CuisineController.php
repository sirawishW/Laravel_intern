<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\Nationality;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuisines = Cuisine::All();
        return view('cuisine.all-cuisine', [
            'cuisines' => $cuisines
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
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuisine = Cuisine::findOrFail($id);
        return view('cuisine.display', [
            'cuisine' => $cuisine
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $cuisine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuisine $cuisine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisine $cuisine)
    {
        //
    }

    //Random cuisine method
    public function random(){
        $random = Cuisine::All()->random(1);
        $nationalities = Nationality::All();
        return view('cuisine.random-cuisine', [
            'random' => $random,
            'nationalities' => $nationalities
        ]);
    }

    //Search cuisine
    public function search(Request $request){
        $search_text = $request->get('query');
        $searchCuisines = Cuisine::where('nameEN', 'LIKE', '%'.$search_text.'%')->get();

        return view('cuisine.all-cuisine-search', [
            'searchCuisines' => $searchCuisines
        ]);
    }
}

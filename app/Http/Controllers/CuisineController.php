<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Nette\Utils\Random;
use PhpParser\Node\Expr\FuncCall;

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
        $cuisine = new Cuisine();
        $cuisine->nameTH = $request->input('nameTH');
        $cuisine->nameEN = $request->input('nameEN');
        $cuisine->nationality = $request->input('nationality');
        $cuisine->description = $request->input('description');
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
        $cuisines = Cuisine::findOrFail($id);
        $cuisines->nameTH = $cuisine->nameTH;
        $cuisines->nameEN = $cuisine->nameEN;
        $cuisines->nationality = $cuisine->nationality;
        $cuisines->description = $cuisine->description;
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
        return view('cuisine.random-cuisine', [
            'random' => $random
        ]);
    }
}

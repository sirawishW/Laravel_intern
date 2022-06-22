<?php

namespace App\Http\Controllers;

use App\Models\PendingCuisine;
use App\Http\Requests\PendingCuisineRequest;
use Illuminate\Support\Facades\Auth;

class PendingCuisineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingCuisines = PendingCuisine::All();
        return $pendingCuisines;
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
     * @param  \App\Http\Requests\PendingCuisineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PendingCuisineRequest $request)
    {
        $request->validated();
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cuisines';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }
        PendingCuisine::create($input);
        session()->flash('message', $input['nameEN']. ' successfully request.');

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendingCuisine  $pendingCuisine
     * @return \Illuminate\Http\Response
     */
    public function show(PendingCuisine $pendingCuisine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendingCuisine  $pendingCuisine
     * @return \Illuminate\Http\Response
     */
    public function edit(PendingCuisine $pendingCuisine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendingCuisine  $pendingCuisine
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendingCuisine $pendingCuisine)
    {
        //
    }
}

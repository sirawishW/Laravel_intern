<?php

namespace App\Http\Controllers;

use App\Models\PendingCuisine;
use App\Http\Requests\StorePendingCuisineRequest;
use App\Http\Requests\UpdatePendingCuisineRequest;

class PendingCuisineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePendingCuisineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendingCuisineRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cuisines';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }
        $pendingCuisine = PendingCuisine::create([
            'nameTH' => $request->input('nameTH'),
            'nameEN' => $request->input('nameEN'),
            'nationality' => $request->input('nationality'),
            'description' => $request->input('description'),
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendingCuisineRequest  $request
     * @param  \App\Models\PendingCuisine  $pendingCuisine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendingCuisineRequest $request, PendingCuisine $pendingCuisine)
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

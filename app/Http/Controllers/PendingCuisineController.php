<?php

namespace App\Http\Controllers;

use App\Models\PendingCuisine;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEN' => 'require|string|unique',
            'nameTH' => 'require|string|unique',
            'description' => 'require|string|max:1000',
            'image' => 'require'
        ]);
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cuisines';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }
        PendingCuisine::create([
            'nameEN' => $input['nameEN'],
            'nameTH' => $input['nameTH'],
            'user'  => Auth::user()->name,
            'nationality' => $input['nationality'],
            'description' => $input['description'],
            'image' => $input['image']
        ]);
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

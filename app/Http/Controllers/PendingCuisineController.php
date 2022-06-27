<?php

namespace App\Http\Controllers;

use App\Models\PendingCuisine;
use App\Models\Cuisine;
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
            'nameEN' => 'required|string',
            'nameTH' => 'required|string',
            'description' => 'required|string|max:1000',
            'image' => 'required'
        ]);
        $input = $request->all();
        if($request->hasFile('image')){
            $destination_path = 'public/images/cuisines';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

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

        return redirect('/home')->with(['message' => 'Request to add menu success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendingCuisine  $pendingCuisine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendingCuisine = PendingCuisine::findOrFail($id);
        return view('cuisine.display-user-request-cuisine', [
            'pendingCuisine' => $pendingCuisine
        ]);
    }

    public function getCuisine($id)
    {
        $pendingCuisine = PendingCuisine::findOrFail($id);
        return $pendingCuisine;
    }

    public function approve($id){
        $cuisine = $this->getCuisine($id);
        cuisine::create([
            'nameEN' => $cuisine['nameEN'],
            'nameTH' => $cuisine['nameTH'],
            'nationality' => $cuisine['nationality'],
            'description' => $cuisine['description'],
            'image' => $cuisine['image']
        ]);
        PendingCuisine::destroy($id);

        return redirect('/home')->with(['message' => 'Successfully Approve']);
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
    public function destroy($id)
    {
        PendingCuisine::destroy($id);

        return redirect('/home')->with(['message' => 'Successfully Decline']);
    }
}

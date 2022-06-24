<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nationality;
use App\Models\PendingCuisine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nationalities = Nationality::All();
        $pendingCuisines = PendingCuisine::All();
        // return view('layouts.homepage' , [
        //     'nationalities' => $nationalities
        // ]);
        $user = Auth::user();
        if($user->role == 'ADMIN'){
            return view('layouts.adminpage', [
                'pendingCuisines' => $pendingCuisines
            ]);
        }
        else{
            return view('layouts.homepage', [
                'nationalities' => $nationalities
            ]);
        }
    }
}

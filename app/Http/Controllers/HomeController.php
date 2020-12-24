<?php

namespace App\Http\Controllers;

use App\Tourism;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function random()
    {
        $dataTourism = Tourism::select('*')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('content.homePage', compact('dataTourism'));
    }
}

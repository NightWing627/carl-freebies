<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freeby;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Freeby::paginate(15)->fragment('freebies');;
        return view('home', compact('data'));
    }

    public function show($id) {
        $freeby = Freeby::with('category', 'user')->find($id);
        // dd($freeby);
        return view('detail', compact('freeby'));
    }
}

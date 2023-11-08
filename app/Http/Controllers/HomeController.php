<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
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
        $medicines=Medicine::get();
        return view('home',compact('medicines'));
    }
    public function about()
    {
        $medicines=Medicine::get();
        return view('about',compact('medicines'));
    }
    
    public function contact()
    {
        $medicines=Medicine::get();
        return view('contact',compact('medicines'));
    }
    public function search(Request $request)
    {
        // dd($request->search);
        $medicines=Medicine::where("name","like",$request->search)->get();
     //   dd($medicines);
        return view('home',compact('medicines'));
    }
    
}


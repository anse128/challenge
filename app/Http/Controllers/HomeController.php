<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

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
        $comic = Http::get('http://gateway.marvel.com/v1/public/comics?ts=1&apikey=312c15483c1c0b5e3bd941a0f50406b5&hash=4ef43476a0ef716922a8883573d3c512');
        $comicArray = $comic->json();
        return view('home',compact('comicArray'));
    }

    public function indexinformation()
    {
        return view('information.index');
    }
}

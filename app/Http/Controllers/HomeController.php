<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensaje;
use DB;

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
        $mensajes =  mensaje::where('cd', auth()->user()->email)->orderBy('prioridad','DESC')->paginate(1);
        return view('home')->with('mensajes', $mensajes);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Informatica;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $informaticas = Informatica::whereNull('fecha_fin');
        return view('dashboard', [
            'informaticas' => $informaticas,
        ]);
    }
}

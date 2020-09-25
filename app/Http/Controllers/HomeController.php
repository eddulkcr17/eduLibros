<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $usuarios = DB::table('users')->count();
        $roles = DB::table('Rols')->count();
        $editoriales = DB::table('Editorials')->count();
        $libros = DB::table('Libros')->count();
        $autores = DB::table('Autors')->count();
        return view('home',compact('usuarios','roles','editoriales','libros','autores'));
    }
}

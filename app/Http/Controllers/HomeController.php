<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\DB;
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
        //return view('home');
        $new_post = DB::table('posts')->get();
        return view('home',compact('new_post'));
    }

      /*adminhome*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_post');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'=>'required|max:1000',
            'content'=>'required|max:5000',  
        ]);
        $user = Auth::user();
        DB::table("posts")->insert([
            'who_post_id' => $user->id,
            'time_created' => now(),
            'time_update' => now(),
            'title' => $request->title,
            'content' => $request->content,
        ]);
        //ไปmethod index
        return redirect('home')->with('success','success create new post.');
       
    }
}

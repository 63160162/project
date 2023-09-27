<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

class ProfileController extends Controller
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
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$user = Auth::user();
        $data = DB::table('users')->select('name', 'email', 'path_pic_profile')->where('id', '=', $id)->get();
        $posts = DB::table('posts')->where('who_post_id', '=', $id)->get();
        return view('profile',compact('data','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('users')->where('id', '=', $id)->get();
        return view('edit_profile',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'name'=>'required|max:50',
            'image_profile'=>'required|mimes:jpg,jpeg,png',  
        ]);

        $image_profile = $request->file('image_profile');
        $name_gen=hexdec(uniqid());

        $name_ext = strtolower($image_profile->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $upload_location='image/profile/';
        $full_path = $upload_location.$img_name; 
        $image_profile->move($upload_location,$img_name); 

        /*
        $user = Auth::user();
        DB::table("user")
            ->where('ACC_No','=',$user->id)
            ->insert([
            'name' =>$request->name,
            'updated_at' => now(),
            'path_pic_profile' => $full_path,
        ]);
        //ไปmethod index
        return redirect('profile.edit')->with('success','successful update Profile.');
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

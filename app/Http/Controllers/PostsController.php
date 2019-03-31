<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'dob'=> 'required',
            'bloodgroup'=> 'required',
            'fathername'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'state'=> 'required',
            'pincode'=> 'required',
            'mcwog'=> 'required',
            'mcwg'=> 'required',
            'lmv'=> 'required'
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        // if($request->hasFile('cover_image')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        // } else {
        //     $fileNameToStore = 'noimage.jpg';
        // }

        // Create Post
        $post = new Post;
        $post= new Post;
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->dob = $request->input('dob');
        $post->bloodgroup = $request->input('bloodgroup');
        $post->fathername = $request->input('fathername');
        $post->phone = $request->input('phone');
        $post->address = $request->input('address');
        $post->state = $request->input('state');
        $post->pincode = $request->input('pincode');
        $post->mcwog = $request->input('mcwog');
        $post->mcwg = $request->input('mcwg');
        $post->lmv = $request->input('lmv');
        $post->user_id = auth()->user()->id;
        //$post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/dashboard')->with('success', 'Your License record Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'dob'=> 'required',
            'bloodgroup'=> 'required',
            'fathername'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'state'=> 'required',
            'pincode'=> 'required',
            'mcwog'=> 'required',
            'mcwg'=> 'required',
            'lmv'=> 'required'
        ]);

        //  // Handle File Upload
        // if($request->hasFile('cover_image')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        // }

        // Edit Post
        $post = Post::find($id);
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->dob = $request->input('dob');
        $post->bloodgroup = $request->input('bloodgroup');
        $post->fathername = $request->input('fathername');
        $post->phone = $request->input('phone');
        $post->address = $request->input('address');
        $post->state = $request->input('state');
        $post->pincode = $request->input('pincode');
        $post->mcwog = $request->input('mcwog');
        $post->mcwg = $request->input('mcwg');
        $post->lmv = $request->input('lmv');
        // if($request->hasFile('cover_image')){
        //     $post->cover_image = $fileNameToStore;
        // }
        $post->save();

        return redirect('/dashboard')->with('success', 'License Record Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        // Check for correct user
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }

        // if($post->cover_image != 'noimage.jpg'){
        //     // Delete Image
        //     Storage::delete('public/cover_images/'.$post->cover_image);
        // }
        
        $post->delete();
        return redirect('/home')->with('success', 'License Record Removed');
    }
}

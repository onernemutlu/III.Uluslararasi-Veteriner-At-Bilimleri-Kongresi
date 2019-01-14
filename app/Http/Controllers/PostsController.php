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
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$posts = Post::orderBy('title','asc')->take(1)->get();
        //$posts = Post::orderBy('title','asc')->get();
        $city = $request->query('city');
        $posts = Post::where('confirmed' , TRUE)->where('city' , 'LIKE', '%'.$city.'%')->orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
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
            'title' => 'required',
            'body' => 'required',
            'city' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);


        //Handle File Upload
            if($request->hasFile('cover_image')) {
                //Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //Get Just File Name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //File Name to Store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';

            }



        //CREATE POST
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->city = $request->input('city');
        $post->user_id = auth()->id();
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Etkinlik Oluşturuldu. Admin Onayından Sonra Yayınlanacaktır.');
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
        if(auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'Bu Sayfaya Giriş Yetkiniz Yok');

        }

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
            'title' => 'required',
            'body' => 'required',
            'city' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //File Name to Store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('storage/cover_images', $fileNameToStore);
        } 


        //CREATE POST
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->city = $request->input('city');
        $post->user_id = auth()->id();
        if($request->hasFile('cover_image')) {

            $post->cover_image = $fileNameStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Etkinlik Güncellendi'); 
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
        if(auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'Bu Sayfaya Giriş Yetkiniz Yok');

        }
        
        if($post->cover_image != 'noimage.jpg') {
                // Delete Image
                Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Etkinlik Kaldırıldı'); 
    }
}

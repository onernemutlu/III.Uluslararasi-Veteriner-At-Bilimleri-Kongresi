<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Products;


class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('admin'))
        {
            //confirmed olcak
            $posts = Post::orderBy('created_at', 'asc')->paginate(10);
            //$posts = Post::where('confirmed' , FALSE)->orderBy('created_at' , 'desc')->paginate(5);
            $products = Products::orderBy('created_at', 'desc')->paginate(10);
            //$products = Products::where('confirmed' , FALSE)->orderBy('created_at' , 'desc')->paginate(5);
            $users = User::orderBy('created_at', 'desc')->paginate(10);
            return view('dashboard')->with('posts', $posts)->with('products', $products)->with('users', $users);
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts)->with('products', $user->products)->with('users', $user->name);
    }
}

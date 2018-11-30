<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        $title = 'OtizART';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about() 
    {
        $title = 'Kuzeyhan Savaş, Öner Nemutlu, Osman Ünal, Doruk Bulut';
        //return view('pages.about');
        return view('pages.about')->with('title', $title);

    }
    public function service() 
    {
        $data = array(

            'title' => 'service',
            'service' => ['Web Design', 'Programming', 'OTIZART']

        );
        
        //return view('pages.service');
        return view('pages.service')->with($data);

    }
}

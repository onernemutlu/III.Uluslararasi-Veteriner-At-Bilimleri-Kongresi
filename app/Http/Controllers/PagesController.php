<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use File;

class PagesController extends Controller
{
    public function index(){

        $title = 'OtizArt a Hoşgeldiniz';
        return view ('pages.index')->with('title', $title) ;

    
    }

    public function contact(){

        $title = 'İletişim';
        return view ('pages.contact')->with('title', $title) ;

    
    }


    public function autism1(){

        $title = 'autism1 sayfası';
        return view ('pages.autism1')->with('title', $title) ;

    
    }


    public function autism2(){

        $title = 'autism2 sayfası';
        return view ('pages.autism2')->with('title', $title) ;

    
    }

    
    public function productsusermanual(){

        $title = 'productsusermanual sayfası';
        return view ('pages.productsusermanual')->with('title', $title) ;

    
    }


    public function donationsusermanual(){

        $title = 'donationsusermanual sayfası';
        return view ('pages.donationsusermanual')->with('title', $title) ;

    
    }


    public function calendar(){

        $title = 'calendar sayfası';
        return view ('pages.calendar')->with('title', $title) ;

    
    }

    public function activitiesusermanual(){

        $title = 'activitiesusermanual sayfası';
        return view ('pages.activitiesusermanual')->with('title', $title) ;

    
    }

    public function registrationusermanual(){

        $title = 'registrationusermanual sayfası';
        return view ('pages.registrationusermanual')->with('title', $title) ;

    
    }


    public function help(){

        $title = 'help sayfası';
        return view ('pages.help')->with('title', $title) ;

    
    }

    
    public function autism3(){

        $title = 'autism3 sayfası';
        return view ('pages.autism3')->with('title', $title) ;

    
    }



    public function about(){

        $title = 'Hakkımızda';
        return view ('pages.about')->with('title', $title) ;

    
    }


    public function about2(){
       
        $data1= array(
            'title' => 'OtizART Ekibi',
            'people' => ['Kuzeyhan Savaş', 'Osman Ünal', 'Öner Nemutlu', 'Doruk Bulut']
        );
        return view ('pages.about2')->with($data1) ;

    
    }

    public function service() 
    {
        $data = array(

            'title' => 'Bağış Paketleri',
            'service' => ['Gümüş Paket - 20 TL', 'Altın Paket - 100 TL', 'Platin Paket - 500 TL', 'Elmas Paket - 2500 TL']

        );
        
        //return view('pages.service');
        return view('pages.service')->with($data);

    }



    public function success() 
    {
        $data3 = array(

            //'title' => 'Ödeme İşleminiz Başarıyla Gerçekleştirildi',
            'service' => [' Öner Nemutlu ', ' Kuzeyhan Savaş ', ' Doruk Bulut ', ' Osman Ünal ']

        );
        
        //return view('pages.service');
        return view('pages.success')->with($data3);


    }


    
}

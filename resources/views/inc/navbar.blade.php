<!DOCTYPE html>
    <html>
    <head>


            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
            <head>
  
                  
  
  
  
  
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <meta name='viewport' content='width=device-width, initial-scale=1'>
                  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>







    <style>
    .navbar {
        background: linear-gradient(to top, #ff6666 0%, #ffcc00 100%);
}

</style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home"></i>
            {{ config('app.name', 'Laravel') }}
        </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>
        
        <a class="p-2 text-light" href="/products"><i class="fa fa-archive"></i> Ürünler</a> 
        <a class="p-2 text-light" href="/service"><i class="fa fa-heart"></i> Bağış Paketleri</a>
        <a class="p-2 text-light" href="/donationEvent"><i class="fa fa-heart"></i> Süreli Bağışlar </a>
        <a class="p-2 text-light" href="/about"><i class="fa fa-users"></i> Hakkımızda</a>
        <a class="p-2 text-light" href="/posts"><i class="fa fa-globe"></i> Aktiviteler</a>
        <a class="p-2 text-light" href="/contact"><i class="fa fa-envelope"></i> İletişim</a>
        <a class="p-2 text-light" href="/help" ><i class="fas fa-question-circle"></i> Yardım & Destek &raquo;</a>
        

       
        

       

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest

          


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i>{{ __(' Giriş Yap') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('choose') }}"><i class="fa fa-fw fa-user-plus"></i>{{ __(' Üye Ol') }}</a>
                    @endif
                </li>
                
                    
                   
                    
               
                
               
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="http://moodle.atilim.edu.tr/theme/image.php/clean/core/1542024772/u/f2"/>  {{ Auth::user()->name }} <span class="caret"></span>
                        
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      
                        <a class="dropdown-item" href="/dashboard">Yönetim Paneli</a>
                       
                        <a class="dropdown-item" href="/purchase">Siparişlerim</a>
                        <a class="dropdown-item" href="{{ route('private.users.show') }}">Hesabı Düzenle</a>
                        <a class="dropdown-item" href="/contact">İletişim</a>
                        <a class="dropdown-item" href="/help">Yardım & Destek</a>
                        

                      <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Çıkış Yap') }}
                      </a>
                      
                     

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

</nav>


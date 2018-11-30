<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
      
                </ul>
                <a class="p-2 text-light" href="#">Ürünler</a>
                <a class="p-2 text-light" href="#">Aktiviteler</a>
                <a class="p-2 text-light" href="#">Bağış Paketleri</a>
                <a class="p-2 text-light" href="/service">Servis</a>
                <a class="p-2 text-light" href="/about">Hakkımızda</a>
                <a class="p-2 text-light" href="/posts">Etkinlikler</a>
                
      
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Kayıt Ol') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="http://moodle.atilim.edu.tr/theme/image.php/clean/core/1542024772/u/f2"/>  {{ Auth::user()->name }} <span class="caret"></span>
                                
                            </a>
      
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                                <a class="dropdown-item" href="/dashboard">Etkinlik Yönetimi</a>

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
        </div>
      </nav>
      

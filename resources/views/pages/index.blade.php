@extends('layouts.app')

@section('content')

<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
    
       
    
        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    <style>
   
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}


.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #0B3861;
   color: orange;
   text-align: center;
}




</style>

    
        <br>
        <br>

        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="container">
        <!-- The form -->
        <!--<form class="example" action="action_page.php">
          <input type="text" placeholder="otizart.com'da Ara.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
          
        </form>-->
      </div>
      
      <center><h1><p id="demo"></p></h1></center>
      
      <!--<script>
          // Set the date we're counting down to
          var countDownDate = new Date("Jan 16, 2019 09:00:00").getTime();
          
          // Update the count down every 1 second
          var x = setInterval(function() {
          
            // Get todays date and time
            var now = new Date().getTime();
              
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
              
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
              
            // If the count down is over, write some text 
            if (distance < 0) {
              clearInterval(x);
              document.getElementById("demo").innerHTML = "OtizART SUNUMA HAZIR";
            }
          }, 1000);
          </script> -->
      
      
      <div class="text-center">
        <h1>OtizART'a Hoş Geldiniz</h1>
        <a><img src="https://i.ibb.co/VTQdS8L/otizart-LOGO.png" alt="otizart-LOGO" border="0"></a>  
        <hr>
        
        <p><a class="btn btn-primary btn-lg" href="/help" role="button">Yardım & Destek &raquo;</a></p>
        <hr>

        @guest
        <h3>Lütfen</h3>
        <p>Siteye Giriş Yapın ya da Üye olun</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Giriş Yap</a> <a class="btn btn-success btn-lg" href="{{ route('choose') }}" role="button">Üye ol</a></p>
        @else
        <h1> {{auth()->user()->name}} </h1>
            @role('private')
                Özel Hesap
            @endrole
            @role('admin')
                <h3><b>Admin Hesabı</b></h3>
            @endrole
            @role('ngo')
               Organizasyon Numarası : {{ auth()->user()->ngoid }}
            @endrole
            @role('standard')
                Teşekkür Ederiz
            @endrole
        @endguest       
        <hr>
        <main role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
              <div class="container">
                
                <h3 class="display-3">Otiz<font color="red">A</font><font color="orange">R</font><font color="blue">T</font></h3>    
                              

                <p>Geliştirilen sistem "OtizArt", Otizm Spektrum Bozukluğu olan çocukların ailelerine maddi yardımda bulunmak için tasarlanmıştır.
                    Bu projenin amacı, kayıtlı STK'lar veya ASD'li çocuklar tarafından yapılan sanat ürünlerini satarak finansal fayda sağlamak veya özel eğitimlerini desteklemektir.</p>
                <p><a class="btn btn-primary btn-lg" href="/about" role="button">Daha Fazlası &raquo;</a></p>
              </div>
            </div>
      
            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-4">
                  <h2>Ürünler</h2>
                  <p> OtizART sayesinde çocuklarınızın yaptığı ürünleri tüm dünyayla paylaşabilirsiniz. </p>
                  <p><a class="btn btn-warning" href="/products" role="button">Ürünlere Git &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Etkinlikler</h2>
                  <p> Yardımcı kuruluş veya organizasyonların duyurularını burdan takip edip kayıt olabilirsiniz. </p>
                  <p><a class="btn btn-danger" href="/posts" role="button">Etkinliklere Git &raquo;</a></p>
                </div>
                <div class="col-md-4">
                  <h2>Bağış Paketleri</h2>
                  <p> Bağışta bulunmak istiyorsanız hazır bağış baketlerini kullanarak sizde yardım edebilirsiniz. </p>
                  <p><a class="btn btn-info" href="/service" role="button">Paketleri Göster &raquo;</a></p>
                </div>
              </div>
      
              <hr>
      
            </div> <!-- /container -->

           <!-- DENEME BAŞLANGICI ----------------------------- -->




           <main role="main">

        
              <div class="container marketing">
        
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        
                      <img class="rounded-circle" src="https://i.ibb.co/7Wk5SNv/otizm-autism-300x300.jpg" alt="Generic placeholder image" width="140" height="140">
                      <br>
                      <br>
                      <h2>Otizmli Çocukların Eğitimi İle İlgili Haklar</h2>
                      <p>Otizmli Bireylerin Eğitim Planı</p>
                      <p>Otizm Özel Eğitimin Amaçları</p>
                      
                      
                      <p><a class="btn btn-warning" href="/autism1" role="button">Detaylar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        
                        <img class="rounded-circle" src="https://i.ibb.co/zrY9CLL/crop.jpg" alt="Generic placeholder image" width="140" height="140">
                        <br>
                        <br>
                        <h2>Otizm Spektrum Bozukluğu Nedir?</h2>
                        <p>Otizm Spektrum Bozukluğu Sebebi</p>
                        <p>Otizm Sizin Hatanız Değildir</p>
                        
                        
                        <p><a class="btn btn-danger" href="/autism2" role="button">Detaylar &raquo;</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                        
                          <img class="rounded-circle" src="https://i.ibb.co/YN4x0Y9/ffff.jpg" alt="Generic placeholder image" width="140" height="140">
                          <br>
                          <br>
                          <h2>Otizm Spektrum Bozukluğu Belirtileri </h2>
       
                          <p>Sosyal Otizm Belirtileri Nelerdir?</p>
                          <p>İletişim Kurarken Ortaya Çıkan Otizm Belirtileri</p>
                          
                          
                          <p><a class="btn btn-info" href="/autism3" role="button">Detaylar &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                  </div><!-- /.row -->
        
              </div>
            </div>
                <!-- START THE FEATURETTES -->
        
                <hr class="featurette-divider">
              <div class="jumbotron">
                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">Neden OtizART ?<span class="text-muted">   Zaman Kazandırır.</span></h2>
                    <p class="lead">Çocuğunuzun özenle hazırladığı ürünleri, yeterli eğitim almak üzere kullanabilmesi için herhangi bir aracı kullanmadan yardım gerekmeksizin
                      satışa sunabilir ve onlara kazanç sağlayabilirsiniz. </p>
                  </div>
                  <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/Gv05sD4/q.png" alt="Generic placeholder image">
                    
                  </div>
                </div>
              </div>
                <hr class="featurette-divider">
              <div class="jumbotron">
                <div class="row featurette">
                  <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Neden OtizART ?<span class="text-muted"> Sosyallik Kazandırır.</span></h2>
                    <p class="lead"> Çocuğunuzun yeteri kadar etkinliklere veya aktivitelere katılamamasından dolayı üzüldüğünüzü biliyoruz, OtizART sayesinde hem kurumların hem de
                      yardımseverlerin düzenlediği tüm etkinliklere veya aktivitelere direk ön koşul olmadan çocuğunuz ile birlikte katılabilirsiniz. Böylelikle çocuğunuzu daha Sosyal
                      ortamlara alışmasını sağlayabilirsiniz.
                    </p>
                  </div>
                  <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/VTpHsLJ/50-adet-ucan-balon-916-500x500.png" alt="Generic placeholder image">
                  </div>
                </div>
              </div>
                <hr class="featurette-divider">
              <div class="jumbotron">
                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">Neden OtizART ? <span class="text-muted">100%</span></h2>
                    <p class="lead">Çocuklara kendilerine yetebilen birer birey olmaları için atması gereken adımlarda yardım edecek ve diğer insanlarla iletişim kurmalarına teşvik edecek güvenilir yollar için
                      sayfamızda <strong>Yalnızca</strong> sizin için etkinlikler, aktiviteler ve ürünler bulunmaktadır. 
                    </p>
                  </div>
                  <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/fShtN96/w.png" alt="Generic placeholder image">
                  </div>
                </div>
              </div>
                <hr class="featurette-divider">
        
                <!-- /END THE FEATURETTES -->
        
              </div><!-- /.container -->
        
        
              
            </main>

      
          </main>
          
          

          

          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
          </head>
          <body>
          
          
          
        
          

        </div>
        
          

          <div class="footer">
            <br>
            <center><p>&copy; KromoSoft Company 2018-2019</p></center>
            <a href="#"><i class='fas fa-angle-up' style='font-size:48px;color:red'></i></a>
          </div>
          <footer class="page-footer font-small stylish-color-dark pt-4">

              <!-- Footer Links -->
              <div class="container text-center text-md-left">
          
                <!-- Grid row -->
                <div class="row">
          
                  <!-- Grid column -->
                  <div class="col-md-4 mx-auto">
          
                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">OtizART & KromoSoft Company</h5>
                    <p>OtizART sayesinde çocuklarınızın yaptığı ürünleri tüm dünyayla paylaşabilirsiniz.


                      </p>
          
                  </div>
                  <!-- Grid column -->
          
                  <hr class="clearfix w-100 d-md-none">
          
                  <!-- Grid column -->
                  <div class="col-md-2 mx-auto">
          
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Ürünler</h5>
          
                    <ul class="list-unstyled">
                      <li>
                        <a href="/products">Ürünleri İncele</a>
                      </li>
                      
                    </ul>
          
                  </div>
                  <!-- Grid column -->
          
                  <hr class="clearfix w-100 d-md-none">
          
                  <!-- Grid column -->
                  <div class="col-md-2 mx-auto">
          
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Etkinlikler</h5>
          
                    <ul class="list-unstyled">
                      <li>
                        <a href="/posts">Etkinlikleri İncele</a>
                      </li>
                     
                    </ul>
          
                  </div>
                  <!-- Grid column -->
          
                  <hr class="clearfix w-100 d-md-none">
          
                  <!-- Grid column -->
                  <div class="col-md-2 mx-auto">
          
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">OtizART</h5>
          
                    <ul class="list-unstyled">
                      <li>
                        <a href="/contact">İletişim</a>
                      </li>
                      <li>
                        <a href="/help">Yardım & Destek</a>
                      </li>
                      <li>
                        <a href="/help">Kullanım Kılavuzları</a>
                      </li>
                      <li>
                        <a href="/about">OtizART Ekibi</a>
                      </li>
                    </ul>
          
                  </div>
                  <!-- Grid column -->
          
                </div>
                <!-- Grid row -->
          
              </div>
              <!-- Footer Links -->
          
              <hr>
          
              <!-- Call to action -->
              <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                  <h5 class="mb-1">Ücretsiz Üye Ol</h5>
                </li>
                <li class="list-inline-item">
                  <a href="/choose" class="btn btn-danger btn-rounded">Üye Ol</a>
                </li>
              </ul>
              <!-- Call to action -->
          
              <hr>
          
              <!-- Social buttons -->
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                  </a>
                </li>
              </ul>
              <!-- Social buttons -->
          
              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">© Copyright:
                <a href="/"> OtizART.com </a>
              </div>
              <!-- Copyright -->
          
          </footer>
          

@endsection

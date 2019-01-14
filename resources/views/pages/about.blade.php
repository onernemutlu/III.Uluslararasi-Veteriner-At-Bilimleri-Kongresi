@extends('layouts.app')


@section('content')
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
</head>
<body>






<br>
<br>
<br>

<div style="text-align:center"><h1>{{$title}}</h1></div>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <style>

.card-img-top {
    width: 100%;
    
    
    position: relative;
}

/* Container needed to position the overlay. Adjust the width as needed */


/* Make the image to responsive */
.image {
  display: block;
  width: 100%;
  height: auto;
}

/* The overlay effect - lays on top of the container and over the image */
.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

/* When you mouse over the container, fade in the overlay title */
.card-img-top:hover .overlay {
  opacity: 1;
}

img {
  border-radius: 6%;
}



.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: yellow;
   text-align: center;
}


  </style>
  <body>

      

    <main role="main">

      <section class="jumbotron text-center">
          <a><img src="https://i.ibb.co/VTQdS8L/otizart-LOGO.png" alt="otizart-LOGO" border="0"></a> 
        <div class="container">
          <!--<h3 class="display-3">Otiz<font color="red">A</font><font color="orange">R</font><font color="blue">T</font></h3>-->
          <p class="lead text-muted">Bu Proje; Atılım Üniversitesi Bilişim Sistemleri Mühendisliği, Bilgisayar Mühendisliği ve Yazılım Mühendisliği Bölümleri 2018 - 2019 Sonbahar Dönemi Bitirme Projesi Olarak Tasarlanmıştır.
                Geliştirilen sistem "OtizArt", Otizm Spektrum Bozukluğu olan çocukların ailelerine maddi yardımda bulunmak için tasarlanmıştır. Bu projenin amacı, kayıtlı STK'lar veya ASD'li çocuklar tarafından yapılan sanat ürünlerini satarak finansal fayda sağlamak veya özel eğitimlerini desteklemektir. 
                OtizART sayesinde çocuklarınızın yaptığı ürünleri tüm dünyayla paylaşabilirsiniz.
                Yardımcı kuruluşların, sivil toplum kuruluşlarının veya organizasyonların duyurularını takip edip kayıt olabilirsiniz. 
                Eğer Bağışta bulunmak istiyorsanız, hazır bağış baketlerini kullanarak sizde yardım edebilirsiniz. 
          </p>
          
          <p>
            <a href="/" class="btn btn-primary my-2">Ana Sayfa</a>
            <a href="/contact" class="btn btn-secondary my-2">İletişim</a>
          </p>
        </div>
        <div>
          <img src="https://i.ibb.co/cgx3z7p/atilim-universitesi.png" width="200" alt="Atılım Üniversitesi">
          
      </div>
      </section>

     
      
      <div class="album py-5 bg-light">
        
            <center><img src="https://i.ibb.co/VBDMgtn/al-ma-y-zeyi-1.png" alt="al-ma-y-zeyi-1" border="0"></a>
                <hr>
          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <br>
              <center><div class="card-img-top"><img src="https://i.ibb.co/p3dwGtb/pp.jpg" alt="pp" border="0">       
                <div class="overlay">oner@otizart.com</div>
              </div>
                
              </center> 
                <div class="card-body">
                  <p class="card-text">Öner Nemutlu</p>
                  <p class="card-text">Atılım Üniversitesi</p>
                  <p class="card-text">Bilişim Sistemleri Mühendisliği 4.Sınıf</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><i class='fab fa-github' style='font-size:24px;color:purple'></i></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><i style='font-size:24px;color:#0077B5' class='fab'>&#xf08c;</i></button>
                    </div>
                    <small class="text-muted">© KromoSoft Company</small>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <br>
                    <center><div class="card-img-top"><img src="https://i.ibb.co/DC1wcDD/kuzey.jpg" alt="pp" border="0">
                      <div class="overlay">kuzeyhan@otizart.com</div>
                    </div>
                    
                    </center> 
                    
                      <div class="card-body">
                        <p class="card-text">Kuzeyhan Savaş</p>
                        <p class="card-text">Atılım Üniversitesi</p>
                        <p class="card-text">Bilişim Sistemleri Mühendisliği 4.Sınıf</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i class='fab fa-github' style='font-size:24px;color:purple'></i></button>
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i style='font-size:24px;color:#0077B5' class='fab'>&#xf08c;</i></button>
                          </div>
                          <small class="text-muted">© KromoSoft Company</small>
                        </div>
                      </div>
                    </div>
            </div>
            
            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <br>
                        <center><div class="card-img-top"><img src="https://i.ibb.co/P1zbbYd/OSMAN.jpg" alt="pp" border="0">
                          <div class="overlay">osman@otizart.com</div>
                        </div>
                       
                        </center> 
                      <div class="card-body">
                        <p class="card-text">Osman Ünal</p>
                        <p class="card-text">Atılım Üniversitesi</p>
                        <p class="card-text">Bilgisayar Mühendisliği 4.Sınıf</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i class='fab fa-github' style='font-size:24px;color:purple'></i></button>
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i style='font-size:24px;color:#0077B5' class='fab'>&#xf08c;</i></button>
                          </div>
                          <small class="text-muted">© KromoSoft Company</small>
                        </div>
                      </div>
                    </div>
            </div>
            
            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <br>
                        <center><div class="card-img-top"><img src="https://i.ibb.co/mSczCh8/DORUK.jpg"" alt="pp" border="0">
                          <div class="overlay">doruk@otizart.com</div>
                        </div>
                        
                        </center>  
                      <div class="card-body">
                        <p class="card-text">Doruk Bulut</p>
                        <p class="card-text">Atılım Üniversitesi</p>
                        <p class="card-text">Bilgisayar Mühendisliği 4.Sınıf</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i class='fab fa-github' style='font-size:24px;color:purple'></i></button>
                              <button type="button" class="btn btn-sm btn-outline-secondary"><i style='font-size:24px;color:#0077B5' class='fab'>&#xf08c;</i></button>
                          </div>
                          <small class="text-muted">© KromoSoft Company</small>
                        </div>
                      </div>
                    </div>
            </div>
            

        
          </div>

        </div>
      </div>
    
   

    </main>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>


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

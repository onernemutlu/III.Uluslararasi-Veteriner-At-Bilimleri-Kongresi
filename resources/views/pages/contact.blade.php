@extends('layouts.app')


@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!DOCTYPE html>
<html>
<head>


</head>

<style>


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

<br>
<br>
<br>
<div style="text-align:center"><h1>{{$title}}</h1></div>  


    <center><img src="https://i.ibb.co/VBDMgtn/al-ma-y-zeyi-1.png" alt="al-ma-y-zeyi-1" border="0"></a>
    <hr>
    <h2>Adres : </h2>
    <p>Kızılcaşar Mahallesi, 06830 İncek Gölbaşı - Ankara - Türkiye</p>   
    <i class="fa fa-building"style="font-size:48px;color:red"></i>
    <hr>
    
    <h2>Telefon : </h2>
    <p>+90 (312) 586 80 00 Pbx</p> 
    <i class="fa fa-phone"style="font-size:48px;color:green"></i></center> 
      
    <hr>
    <center><table class="table table-striped">
      <thead>
        <tr>
          <th>İsim</th>
          <th>Soyisim</th>
          <th>E-Posta</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Öner</td>
          <td>Nemutlu</td>
          <td><a class="" href="#">oner@otizart.com</a></td>
        </tr>
        <tr>
          <td>Kuzeyhan</td>
          <td>Savaş</td>
          <td><a class="" href="#">kuzeyhan@otizart.com</a></td>
        </tr>
        <tr>
          <td>Osman</td>
          <td>Ünal</td>
          <td><a class="" href="#">osman@otizart.com</a></td>
        </tr>
        <tr>
            <td>Doruk</td>
            <td>Bulut</td>
            <td><a class="" href="#">doruk@otizart.com</a></td>
          </tr>
      </tbody>
    </table></center>
  </div>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
    <center>
    <hr>
    <i class="fa fa-facebook-square"style="font-size:48px;color:#3C5A99"></i>
    
    <i class="fa fa-github" style="font-size:48px;color:purple"></i>

    <i class="fa fa-twitter-square" style="font-size:48px;color:#38A1F3"></i>
    <hr>
    <div>
        <img src="https://i.ibb.co/cgx3z7p/atilim-universitesi.png" width="200" alt="Atılım Üniversitesi">
        
    </div><!-- end of footer-logo -->
    <hr>

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

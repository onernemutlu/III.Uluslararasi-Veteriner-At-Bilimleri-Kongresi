@extends('layouts.app')

@section('content')
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
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only"></span>
        </div>
      </div>
    <br>
    <div style="text-align:center" class="alert alert-success">
        <strong>Ödeme İşlemi Başarıyla Gerçekleştirildi !</strong> | OtizART
      </div>

    <br>
    <div style="text-align:center"><h1 class="display-3">Otiz<font color="red">A</font><font color="orange">R</font><font color="blue">T</font></h1></div>  
    <br> 
    <hr>


    <div class="jumbotron text-xs-center">
        <center><h1 class="display-3">Teşekkür Ederiz !</h1>
        <p class="lead"><strong>Lütfen E-Postanızı Kontrol Ediniz</strong></p>
        <hr>
        <p>
          Herhangi Bir Sorun İçin <a href="/contact">Bizimle İletişime Geçebilirsiniz</a> 
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/" role="button">Ana Sayfa</a>
        </p></center>
      </div>

      <div class="jumbotron text-xs-center">


          <center><h1 class="display-5">Sipariş Numaranız : 20190116001</h1>
          
          


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

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

<div style="text-align:center"><h1> Üyelik İşlemleri Kullanım Kılavuzu </h1></div> 
<hr>



<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        1. Ana Sayfa'da Sağ Üst Tarafta Bulunan " Üye Ol " Butonuna Tıklıyoruz.
    </a></li>
    
</ul>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        2. Açılan Sayfada OtizART.com Üzerinde Kullanılabilir Durumda Olan 3 (üç) Kullanıcı Tipini Görüyoruz.
    </a></li>
    
</ul>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        3. Her Bir Kullanıcının Özellikleri ve Farkları " Detaylı Bilgi " Butonuna Tıklanıldığı Zaman Ekranda Gösterilecektir.
    </a></li>
    
</ul>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        4. Açıklanan Bilgileri Okuduktn sonra Hangi Tip Kullanıcı Olduğumuza Karar Veriyoruz ve Kayıt Olmak İstediğimiz Üyelik Türünün Altındaki <br>
        "Üye Ol" Butonuna Tıklıyoruz.
    </a></li>
    
</ul>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        5. Ardından Açılan Form'da Tüm Alanları Eksiksiz ve Doğru Bilgilerle Dolduruyoruz ve tekrar " Üye Ol " Butonuna Tıklıyoruz.    </a></li>
    
</ul>
<ul class="list-group">
    <li class="list-group-item list-group-item-danger"><a class="btn danger">
        6. Hesabınız Admin Tarafından Onaylandıktan Sonra, " Giriş Yap " Butonuan Tıklayarak Oluşturduğunuz Hesapla OtizART.com'a Giriş yapabilirsiniz.
    </a></li>
    
</ul>


<center>
<hr>
<a href="/help" class="btn btn-primary">Geri Dön</a>
</center>
<br>

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

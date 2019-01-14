@extends('layouts.app')
@section('content')
<br>
<br>
<br>

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
<div style="text-align:center"><h1> Ürünler Kullanım Kılavuzu </h1></div> 
<hr>


<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            1. Ürünler Bölümünü Kullanabilmek İçin Öncelikle OtizART'a üye olmalısınız veya 
            zaten kayıtlıysanız giriş yapmalısınız.
        </a></li>
        
</ul>
<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            2. Üyelik İşlemlerini Gerçekleşirdikten Sonra veya Sisteme Giriş Yaptıktan sonra, Ana Sayfa'da Sağ Üst Kısımda Adımızın
            Yazılı Olduğu Bölüme Tıklıyoruz.
        </a></li>
        
</ul>
<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            3. Açılan Sayfada " Yönetim Paneli " Yazısına Tıklıyoruz.
        </a></li>
        
</ul>
<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            4. Açılan Sayfada " Ürün Ekle " Yazısına Tıklıyoruz.
        </a></li>
        
</ul>
<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            5. Ürün Ekleme Sayfası Açıldıktan Sonra Gerekli ve Doldurulması Zorunlu Alanları Doldurarak, Ürünümüzün Görselini Seçerek, " Gönder " Butonuna Tıklıyoruz.
        </a></li>
        
</ul>
<ul class="list-group">
        <li class="list-group-item list-group-item-success"><a class="btn success">
            6. Ürününüz Başarı ile Admin Onayına Gönderilir ve Admin kontrolünden sonra onaylanırsa " ÜRÜNLER " Sayfasında Yayınlanmaya Başlar.
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

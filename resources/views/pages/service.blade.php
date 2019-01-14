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
    <div style="text-align:center"><h1>{{$title}}</h1></div>  
    
    <br> 
  
    
        <center><img src="https://i.ibb.co/VBDMgtn/al-ma-y-zeyi-1.png" alt="al-ma-y-zeyi-1" border="0"></a></center>                   

      <p>Geliştirilen sistem <strong>" OtizArt "</strong>, Otizm Spektrum Bozukluğu olan çocukların ailelerine maddi yardımda bulunmak için tasarlanmıştır.
        <strong>Bu projede bağış paketlerinin amacı</strong>, kayıtlı STK'lar veya ASD'li çocuklar tarafından yapılan sanat ürünlerinin yanısıra hayırsever insanlar tarafından 
          kendilerine veya etkinliklere yapılacak bağışlarla finansal fayda sağlamak veya özel eğitimlerini desteklemektir.
          <strong>Her 68 bebekten 1’i otizm riski ile dünyaya geliyor.</strong>
          Otizm doğuştan gelen gelişimsel bir farklılık. Tek çaresi ise erken tanı ve yoğun, sürekli eğitimdir. 
          Otizmli çocukların eğitime kavuşması ve otizm farkındalığı yaratabilmemiz için destek olabilirsiniz.
        
        </p>
     
    </div>
    <div style="text-align:center">

        <i class='fas fa-hand-holding-heart' style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i>

    </div>
<hr>
    
<div style="text-align:center">

    <div>
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Gümüş Paket</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">20<small class="text-muted">/ Aylık</small></h1>
              <i style='font-size:24px' class='fas'>&#xf195;</i>
              <ul class="list-unstyled mt-3 mb-4">
                <li><img src="https://i.ibb.co/8906b0b/aaaa1.png" alt="aaaa1" border="0"> Destek Paketi # 1</li>
                <li>Çam Sakızı</li>
                <li>Çoban</li>
                <li>Armağanı</li>
                
              </ul>
              
              <a class="btn btn-primary btn-lg" href="/payments/create" role="button">Bağış Yap</a>
            </div>
            <div class="card-footer text-muted">
                91 Adet Bağış Yapıldı
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Altın Paket</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">100<small class="text-muted">/ Aylık</small></h1>
              <i style='font-size:24px' class='fas'>&#xf195;</i>
              <ul class="list-unstyled mt-3 mb-4">
                <li><img src="https://i.ibb.co/8906b0b/aaaa1.png" alt="aaaa1" border="0"> Destek Paketi # 2</li>
                <li>Her 20 Bağış</li>
                <li>Bir Arkadaşımızın İhtiyaç Duyduğu 1 Aylık </li>
                <li>Özel Eğitimine Karşılık Gelmektedir</li>
              </ul>
              <a class="btn btn-primary btn-lg" href="/payments/create" role="button">Bağış Yap</a>
            </div>
            <div class="card-footer text-muted">
                43 Adet Bağış Yapıldı
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Platin Paket</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">500<small class="text-muted">/ Aylık</small></h1>
              <i style='font-size:24px' class='fas'>&#xf195;</i>
              <ul class="list-unstyled mt-3 mb-4">
                <li><img src="https://i.ibb.co/8906b0b/aaaa1.png" alt="aaaa1" border="0"> Destek Paketi # 3</li>
                <li>Her 4 Bağış</li>
                <li>Bir Arkadaşımızın İhtiyaç Duyduğu 1 Aylık </li>
                <li>Özel Eğitimine Karşılık Gelmektedir</li>
              </ul>
              <a class="btn btn-primary btn-lg" href="/payments/create" role="button">Bağış Yap</a>
            </div>
            <div class="card-footer text-muted">
                116 Adet Bağış Yapıldı
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Elmas Paket</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">2000<small class="text-muted">/ Aylık</small></h1>
              <i style='font-size:24px' class='fas'>&#xf195;</i>
              <ul class="list-unstyled mt-3 mb-4">
                <li><img src="https://i.ibb.co/8906b0b/aaaa1.png" alt="aaaa1" border="0"> Destek Paketi # 4</li>
                <li>Her 1 Bağış</li>
                <li>Bir Arkadaşımızın İhtiyaç Duyduğu 1 Aylık </li>
                <li>Özel Eğitimine Karşılık Gelmektedir</li>
              </ul>
              <a class="btn btn-primary btn-lg" href="/payments/create" role="button">Bağış Yap</a>
            </div>
            <div class="card-footer text-muted">
                4 Adet Bağış Yapıldı
            </div>
          </div>
    </div>
</div>
    <br>
    
</div>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>
    <body>
    

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

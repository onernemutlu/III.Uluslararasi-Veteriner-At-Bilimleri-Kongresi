@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    



    <style>
    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }
    
    .active, .accordion:hover {
      background-color: #ccc;
    }
    
    .accordion:after {
      content: '\002B';
      color: #777;
      font-weight: bold;
      float: right;
      margin-left: 5px;
    }
    
    .active:after {
      content: "\2212";
    }
    
    .panel {
      padding: 0 18px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
    }


    

/* Green */
.success {
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}

/* Blue */
.info {
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  color: red;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  color: black;
}

.default:hover {
  background: #e7e7e7;
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
    </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>


    <br>
    <br>
    <br>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
                          
        <div class="card-deck">
          <div class="card bg-primary">
            <div class="card-body text-center">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Popüler Sorular</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title"><i class='fas fa-medal' style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i> <small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><a type="button" class="btn btn-outline-success">İade İşlemi</a></li>
                      <br>
                      <li><a type="button" class="btn btn-outline-danger">Sipariş İptali</a></li>
                      <br>
                      <li><a type="button" class="btn btn-outline-info">Ücret İadesi</a></li>
                      
                    </ul>
                    
                  </div>
            </div>
          </div>
          <div class="card bg-warning">
            <div class="card-body text-center">
                
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">İade ve İptal</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title"><i class='fas fa-reply-all' style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i> <small class="text-muted"></small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                            <li><a type="button" class="btn btn-outline-success">İade Kargo Ücreti</a></li>
                            <br>
                            <li><a type="button" class="btn btn-outline-danger">İade Politikası</a></li>
                            <br>
                            <li><a type="button" class="btn btn-outline-info">Ücret İadesi</a></li>
                            
                          </ul>
                      
                    </div>
                  
            </div>
          </div>
          <div class="card bg-success">
            <div class="card-body text-center">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Kargo</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title"><i class='fas fa-truck' style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i> <small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                          <li><a type="button" class="btn btn-outline-success">Kargo Firması</a></li>
                          <br>
                          <li><a type="button" class="btn btn-outline-danger">Kargo Süresi</a></li>
                          <br>
                          <li><a type="button" class="btn btn-outline-info">Kargo Nerede ? </a></li>
                          
                        </ul>
                   
                  </div>
            </div>
          </div>
          <div class="card bg-danger">
            <div class="card-body text-center">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Siparişler</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title"><i class='fas fa-clipboard-check' style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000;"></i> <small class="text-muted"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                          <br>
                          <br>
                          <li><a type="button" class="btn btn-outline-success">Sipariş Takibi</a></li>
                          <br>
                         
                          
                          
                        </ul>
                        
                  </div>
            </div>
          </div>  
        </div>
      

        <br>
        <hr>

        <button class="accordion"><strong>İade İşlemini Nasıl Yapabilirim ? </strong></button>
                  <div class="panel">
                    <p><br>
                      <strong>İade adımları:</strong><br>

                      •	otizart.com'da yer alan <strong>"Hesabım"</strong> bölümünden <strong>“ İletişim"</strong> Bölümüne gidin.<br>
                      
                      •	Herhangi bir yöneticinin e-posta adresini seçin.<br>
                      
                      •	İade edilecek ürün ve iade nedenini anlatan, Aynı üründen birden fazla satın aldıysanız iade edilecek ürün adedini de belirten bir e-posta gönderin.<br>
                      
                      •	Kargo seçiminizi yapın.<br>
                      
                      •	<strong>Ekranda çıkan iade kargo kodunu not alın</strong>. İade kargo kodunuza siparişlerim sayfasından ve üyelik mail adresinize gönderilen bilgilendirme mesajından da ulaşabilirsiniz.<br>
                      
                      •	İade edilecek ürünler ile birlikte faturayı tek bir pakete koyun.<br>
                      
                      •	Paketi iade kargo koduyla birlikte seçtiğiniz kargoya <strong>7 gün</strong> içinde teslim edin. 7 günü geçirdiğiniz durumda yeniden iade kargo kodu almanız gerekir.<br>
                      
                      
                      <br></p>
                  </div>

                  <button class="accordion"><strong>İade Politikanız Nedir ? </strong></button>
                  <div class="panel">
                    <p><br>
                      • İade süresi elinize ulaştığından itibaren <strong>15 gündür.</strong><br>


                      • Ürünlerinizi <strong>ÜCRETSİZ</strong> iade edebilmek için <strong>iade kargo kodu</strong> almanız gerekir. İade kargo kodu almak için <strong>“İade işlemini nasıl yapabilirim?”</strong> sorusundaki adımları takip edin.<br>
                      
                      
                      • Ürünlerinizi iade adımında gösterilen kargo firması ile iade edebilirsiniz.<br>
                      
                      
                      • Tek kullanımlık ürünler ile hızlı bozulan veya son kullanma tarihi geçme ihtimali olan ürünlerin iadesi kabul edilmez.<br>

                      •Ürünler kullanılmış, yıpranmış, yıkanmış bir şekilde bize ulaşırsa size geri göndermek zorunda kalabiliriz. Bu durumda ücret iadesi yapılmaz.<br></p>
                  </div>

                  <button class="accordion"><strong>İade/iptal ettiğim ürünün ücret iadesi ne zaman yapılacak?</strong></button>
                  <div class="panel">
                    <p><br>
                      • İptal ettiğiniz bir siparişin ücret iade işlemleri <strong>2 iş günü</strong> içerisinde tamamlanır.<br>


                      • İade edilen ürün süreci aşağıdaki gibidir:<br>
                      
                      -	Ürün bize ulaştıktan sonra iade şartlarına uygunluğu kontrol edilir.<br>
                      
                      -	Ürün iade şartlarına uygunsa <strong>2-10 gün</strong> içerisinde iade süreci tamamlanır.<br>
                      
                      -	Ürün iade şartlarına uygun değilse adresinize geri gönderilir.<br>
                      
                      
                      • Ayrıca iptal veya iadeniz tamamlanınca üyelik e-mailinize bir bilgilendirme mesajı gönderilir.<br>
                      
                      
                      • Bu mesajı aldıysanız bankanıza trendyol tarafından ücret iadesi yapılmış demektir.<br></p>
                  </div>
                    <hr>






                    

                    <button class="accordion"><strong>Siparişim hangi kargo ile gönderilecek? </strong></button>
                              <div class="panel">
                                <p><br>
                                  
            
                                  • Siparişlerimiz <strong>Yurtiçi Kargo, MNG Kargo, Aras Kargo, Horoz Lojistik ve Aktif Kurye</strong> firmalarından biri ile belirttiğiniz adrese teslim edilir.<br>


                                  • Kargo firması seçimi şu an için bulunmamaktadır.<br>

                                  MNG Kargo için 444 06 06<br>

                                  Yurtiçi Kargo için 444 99 99<br>

                                  AGT Çağrı Merkezi için 0850 480 76 77<br>
                                                                    
                                  
                                  </p>
                              </div>
            
                              <button class="accordion"><strong>Siparişim ne zaman gelir? </strong></button>
                              <div class="panel">
                                <p><br>
                                  Sipariş dağıtıma çıktığında kargo firması tarafından <strong>SMS ile tarafınıza bilgi aktarılır.</strong></p>
                              </div>
            
                              <button class="accordion"><strong>Kargom nerede ? </strong></button>
                              <div class="panel">
                                <p><br>
                                  Siparişiniz kargoya teslim edildiğinde <strong>“OtizART.com | Siparişiniz kargoya verildi”</strong> başlıklı bilgilendirme mesajı ve kargo firmasından bilgi SMS’i alırsınız.<br>


                                  Bu SMS ve bilgi mesajı geldikten sonra kargonuzu Bilgi mesajının içerisinde yer alan <strong>“Kargo Takip” </strong>linkinden takip edebilirsiniz.

                                  <br></p>
                              </div>
                                <hr>




                                

                    <button class="accordion"><strong>Siparişimi nasıl takip edebilirim ? </strong></button>
                    <div class="panel">
                      <p><br>
                        
                        Kartınızdan ödeme yaparak siparişinizi tamamladığınız andan elinize ulaşana kadar aşağıdaki bilgilendirme mesajlarını alırsınız.<br>

                          1.	Ödeme tamamlanınca <strong>“OtizART.com | Siparişiniz alındı”</strong> başlıklı bir bilgilendirme mesajı<br>

                          2.	Siparişiniz kargoya teslim edildiğinde <strong>“OtizART.com | Siparişiniz kargoya verildi”</strong> başlıklı bilgilendirme mesajı ve kargo firmasından bilgi SMS’i<br>

                          3.	Sipariş teslim edildiğinde <strong>“ OtizART.com | Siparişiniz Teslim Edildi!”</strong> başlıklı bilgilendirme mesajı

                        <br>
                                                          
                        
                        </p>
                    </div>
  
                  
                      <hr>

                    <center><div>
                        
                      <div class="card" style="width:400px">
                        <br>
                          <i class='fas fa-phone' style='font-size:48px;color:green'></i>
                          <div class="card-body">
                            <h4 class="card-title"><strong>Destek Hattı : 0 312 499 99 91</strong></h4>
                            <p class="card-text">Hafta içi: 09:30-17:00<br>
                                Cumartesi: 13:00-17:00 | Pazar: 13:00-17:00<br>
                                yardim@otizart.com              </p>
                            <a href="/" class="btn btn-primary">Ana Sayfa</a>
                          </div>
                          <!--<img class="card-img-bottom" src="https://i.ibb.co/mJrXrG5/aaaa1.png alt="Card image" style="width:100%">-->
                        </div>
                      </div>
                    </center>

                    <br>
                    <br>
                    <br>



                    <div style="text-align:center"><h1>Kullanım Kılavuzları</h1></div>  

                    <center><ul class="list-group">
                      <li class="list-group-item list-group-item-success"><a href="/productsusermanual" class="btn success">Ürünler Kullanım Kılavuzu</a></li>
                      <li class="list-group-item list-group-item-info"><a href="/donationsusermanual" class="btn info">Bağış Paketleri Kullanım Kılavuzu</a></li>
                      <li class="list-group-item list-group-item-warning"><a href="/activitiesusermanual" class="btn warning">Aktiviteler Kullanım Kılavuzu</a></li>
                      <li class="list-group-item list-group-item-danger"><a href="/registrationusermanual" class="btn danger">Üyelik Kullanım Kılavuzu</a></li>
                    </ul></center>

                    <br>
                    <br>
                    <br>



                  <script>
                  var acc = document.getElementsByClassName("accordion");
                  var i;

                  for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var panel = this.nextElementSibling;
                      if (panel.style.maxHeight){
                        panel.style.maxHeight = null;
                      } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                      } 
                    });
                  }
                  </script>















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

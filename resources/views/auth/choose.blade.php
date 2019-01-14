@extends('layouts.app')

@section('content')
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
          <head>

                




                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
                    <style>
                                table {
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                    width: 100%;
                                    border: 1px solid #ddd;
                                    }

                                    th, td {
                                    text-align: center;
                                    padding: 16px;
                                    }

                                    th:first-child, td:first-child {
                                    text-align: left;
                                    }

                                    tr:nth-child(even) {
                                    background-color: #f2f2f2
                                    }

                                    .fa-check {
                                    color: green;
                                    }

                                    .fa-remove {
                                    color: red;
                                    }


                    </style>

          </head>
          <body>

<br>
<br>
<br>
<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
                <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                          OtizART için Üyelik Tipinizi Seçiniz
                        </a>
                        <!--<a href="{{ route('ngo.register')}}" class="list-group-item list-group-item-action">Sivil Toplum Kuruluşları</a>
                        <a href="{{ route('private.register')}}" class="list-group-item list-group-item-action">Özel Kullanıcı</a>
                        <a href="{{ route('standard.register')}}" class="list-group-item list-group-item-action">Normal Kullanıcı </a> -->
                        

                  



                </div>
         </div>
    </div>
</div>

<hr>

<div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Sivil Toplum Kuruluşları</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><b>Otiz</b><font color="red"><b>A</b></font><font color="orange"><b>R</b></font><font color="blue"><b>T</b></font></h1>
              <i style='font-size:28px' class='fas'>&#xf549;</i>

              <ul class="list-unstyled mt-3 mb-4">
                <li>&emsp;</li>
                <li>Aktivite / Etkinlik Oluşturabilir.</li>
                <li>Satılmak Üzere Ürün Ekleyebilir.</li>
                <li>&emsp;</li>
                <li><!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Detaylı Bilgi
                    </button>
                        
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                        
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Sivil Toplum Kuruluşları</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                        
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Bu tür bir kullanıcı aynı zamanda bir hayırsever olabilir. <br>
                                    Sadece STK'lar bu tip bir kullanıcıyı alabilirler. <br>
                                    STK'lar sanat ürünlerini gelir sağlamak için satabilirler. <br>
                                    Bu tür bir kullanıcının etkinlik takvimi üzerinde etkinlik düzenleme yetkisi vardır.<br>
                                
                                    (Kuruluş Kimlik Numarasının Girilmesi Zorunludur)
                                    
                                </div>
                        
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <small class="text-muted">© KromoSoft Company</small>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                
                                </div>
                        
                            </div>
                            </div>
                        </div>
                    </li>
              </ul>
              <a href="{{ route('ngo.register')}}" type=button class="btn btn-lg btn-block btn-outline-primary">Üye Ol</a>

            </div>
          </div>
          <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Özel Kullanıcı</h4>
                </div>
                <div class="card-body">
                <h1 class="card-title pricing-card-title"><b>Otiz</b><font color="red"><b>A</b></font><font color="orange"><b>R</b></font><font color="blue"><b>T</b></font></h1>
                <i style='font-size:28px' class='fas'>&#xf4fc;</i>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>&emsp;</li>
                    <li>Aktivite / Etkinlik'lere Katılabilir.</li>
                    <li>Satılmak Üzere Ürün Ekleyebilir.</li>
                    <li>&emsp;</li>
                    <li><!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                                Detaylı Bilgi
                        </button>
                            
                            <!-- The Modal -->
                            <div class="modal" id="myModal1">
                                <div class="modal-dialog">
                                <div class="modal-content">
                            
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Özel Kullanıcı</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                            
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    (Aile Hesabı)<br>
                                    Özel kullanıcı, otizmli çocuk sahibi aileler içindir.<br>
                                    Özel kullanıcılar etkinlik takvimini görebilir.<br>
                                    Özel Kullanıcı, çocuğunun hazırladığı ürünü sayfa üzerinden satışa sunabilir.<br>
                                    
                                    (TC Kimlik Numarasının Girilmesi Zorunludur)
                                    </div>
                            
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <small class="text-muted">© KromoSoft Company</small>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                    </div>
                            
                                </div>
                                </div>
                            </div>
                        </li>
                  </ul>
                  <a href="{{ route('private.register')}}" type=button class="btn btn-lg btn-block btn-outline-primary">Üye Ol</a>
    
                </div>
              </div>
              <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Normal Kullanıcı</h4>
                    </div>
                    <div class="card-body">
                    <h1 class="card-title pricing-card-title"><b>Otiz</b><font color="red"><b>A</b></font><font color="orange"><b>R</b></font><font color="blue"><b>T</b></font></h1>
                    <i style='font-size:28px' class='fas'>&#xf007;</i>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>&emsp;</li>
                        <li>Aktivite / Etkinlik'lere Katılabilir.</li>
                        <li>Ürün Satın Alabilir.</li>
                        <li>&emsp;</li>
                        <li><!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                                    Detaylı Bilgi
                            </button>
                                
                                <!-- The Modal -->
                                <div class="modal" id="myModal2">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Normal Kullanıcı</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Standart kullanıcı, ailelere veya kurumlara destek olmak için bir yada birden fazla ürün satın alabilir, aynı şekilde bağışta bulunabilir.<br>
                                            Standart kullanıcı etkinlik takvimini görebilir ve katılabilir.
                                        </div>
                                
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                         <small class="text-muted">© KromoSoft Company</small>   
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                        </div>
                                
                                    </div>
                                    </div>
                                </div>
                            </li>
                      </ul>
                      <a href="{{ route('standard.register')}}" type=button class="btn btn-lg btn-block btn-outline-primary">Üye Ol</a>
        
                    </div>
                  </div>
        </div>

</div>

<div class="jumbotron-text-center">

<div class="album py-5 bg-light">    
        
                        <h2>Kullanıcı Özellikleri</h2>

                        <table>
                        <tr>
                            <th style="width:50%">Özellikler</th>
                            <th>Sivil Toplum Kuruluşları</th>
                            <th>Özel Kullanıcı</th>
                            <th>Standart Kullanıcı</th>
                        </tr>
                        <tr class="success">
                            <td>Aktivite Oluşturabilmek</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                        </tr>
                        <tr>
                            <td>Aktivitelere Katılabilmek</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Ürün Satışı Oluşturmak</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                        </tr>
                        <tr>
                            <td>Ürün Satın Alabilmek</td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-remove"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Bağış Yapabilmek</td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        </table>
        
</div>

</div>

<footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#"><i class='fas fa-angle-up' style='font-size:48px;color:red'></i></a>
          </p>
          
        </div>
      </footer>






</center>

@endsection

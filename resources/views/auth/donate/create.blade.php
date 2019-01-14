@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
  <br>
<div class="album py-5 bg-light">
    <div style="text-align:center"><h1>Ödeme Ekranı</h1></div>   

    <div class="order-md-1">  
      <center><img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/Hp5xmRp/guvenli-alisveris-sec-750x250-750x250.png" alt="Generic placeholder image"></center>
      <br>
      <center><img class="featurette-image img-fluid mx-auto" src="https://i.ibb.co/r3MmYKh/kredi-kart-logolar-png-2.png" alt="Generic placeholder image"></center>
    </div>
    
    <br>    
    <hr>
    <br>
    {!! Form::open(['action' => 'DonateController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    
    {{ Form::hidden('eventId' , $eventId) }}

    <div class="col-md-6 mb-3">
      {{Form::label('name', 'Adınız')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Adınız'])}}

    </div>
    
    <div class="col-md-6 mb-3">
      {{Form::label('surname', 'Soyadınız')}}
      {{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Soyadınız'])}}

    </div>

    <div class="col-md-6 mb-3">
      {{Form::label('phone_number', 'Telefon Numaranız')}}
      <div class="input-group-prepend">
          <span class="input-group-text">+90</span>
          {{Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => 'Telefon Numaranız'])}}
        </div>
      

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('eposta', 'E-Posta Adresiniz')}}
      {{Form::text('eposta', '', ['class' => 'form-control', 'placeholder' => 'E-Posta Adresiniz'])}}

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('price', 'Ücret')}}
      {{Form::number('price', 100 , ['class' => 'form-control', 'placeholder' => 'Ücret'])}}

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('address', 'Adresiniz')}}
      {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Adresiniz'])}}

    </div>

    <div class="col-md-5 mb-3">

        
      {{Form::label('city', 'Şehir')}}
      {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Şehir'])}}

    </div>

    <div class="col-md-5 mb-3">


      {{Form::label('country', 'Ülke')}}
      {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Ülke'])}}

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('ZIP', 'Posta Kodunuz')}}
      {{Form::text('ZIP', '', ['class' => 'form-control', 'placeholder' => 'Posta Kodunuz'])}}

    </div>

    <hr class="mb-4">
    <center>
    <div class="custom-control custom-checkbox">
      
      <input type="checkbox" class="custom-control-input" id="same-address">
      <label class="custom-control-label" for="same-address">Fatura Adresim ve Kargo Adresim Aynı</label>
    </div>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="save-info">
      <label class="custom-control-label" for="save-info">Bilgilerimi Bir Sonraki Alışveriş İçin Kaydet</label>
    </div>
   
    <hr>
    <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="credit">Kredi Kartı</label>
          <i style='font-size:24px;color:#192061' class='fab'>&#xf1f0;</i>
        </div>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="debit">Banka Kartı</label>
          <i style='font-size:24px;color:#FF5F00' class='fab'>&#xf1f1;</i>
        </div>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">PayPal</label>
          <i style='font-size:24px;color:#169BD7' class='fab'>&#xf1f4;</i>
        </div>
      </div>
    </center>
    <hr>



    <div class="col-md-6 mb-3">
        <i style='font-size:24px' class='far'>&#xf09d;</i>
      {{Form::label('credit_card_number', 'Kart Numaranız')}}
      {{Form::text('credit_card_number', '', ['class' => 'form-control', 'placeholder' => 'Kart Numaranız'])}}

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('EXP', 'Geçerlilik Tarihi')}}
      {{Form::text('EXP', '', ['class' => 'form-control', 'placeholder' => 'Geçerlilik Tarihi'])}}

    </div>

    <div class="col-md-6 mb-3">
      {{Form::label('Card_Name', 'Kart Üzerindeki İsim')}}
      {{Form::text('Card_Name', '', ['class' => 'form-control', 'placeholder' => 'Kart Üzerindeki İsim'])}}

    </div>

    <div class="col-md-3 mb-3">
      {{Form::label('CVV', '3 Haneli Şifreniz')}}
      {{Form::text('CVV', '', ['class' => 'form-control', 'placeholder' => '3 Haneli Şifreniz'])}}

    </div>

    <hr>
    <center>{{Form::submit('Ödeme Yap', ['class' => 'btn btn-primary'])}}</center>
    
  {!! Form::close() !!}  
</div>
  <hr>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

  
@endsection


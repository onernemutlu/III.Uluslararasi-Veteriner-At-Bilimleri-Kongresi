@extends('layouts.app')

@section('content')

<br>
<br>   
<br>
<div style="text-align:center"><h1>Bağış Etkinlikleri</h1></div>  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <br>
    <br>

    @if(count($donations) > 0)
        @foreach($donations as $donation)

        <div class="card-group">
            <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$donation->amount}}</h3>
                        <a class="card-title" href="/donationEvent/{{$donation->donationEvent->id}}" >{{$donation->donationEvent->title}}</a>
                        <div class="card-footer">
                                <small class="text-muted">Bağış Tarihi {{$donation->created_at}} </small>
                        </div>
                        <hr>
                    </div>              
                </div>
            </div>
            
        @endforeach
    @else
        <p>Aktivite Yok</p>
    @endif
    <footer class="text-muted">
            <div class="container">
              <p class="float-right">
                <a href="#"><i class='fas fa-angle-up' style='font-size:48px;color:red'></i></a>
              </p>
              
            </div>
          </footer>
@endsection

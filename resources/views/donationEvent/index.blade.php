@extends('layouts.app')

@section('content')

<br>
<br>   
<br>
<div style="text-align:center"><h1>Bağış Etkinlikleri</h1></div>  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <br>
    <br>

    @if(count($events) > 0)
        @foreach($events as $event)

        <div class="card-group">
            <div class="card">

            

                    <div class="card-img-top">
                            <br>
                            <img style="width:100%" src="/storage/cover_images/{{$event->cover_image}}">
                            
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="/donationEvent/{{$event->id}}">{{$event->title}}</a></h3>
                        <div class="card-footer">
                                <small class="text-muted">Eklenme tarihi {{$event->created_at}} </small>
                        </div>
                        <p><button><a href="/donationEvent/{{$event->id}}">{{$event->title}}</a></button></p>
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

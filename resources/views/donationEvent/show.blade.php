@extends('layouts.app')

@section('content')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<br>
<br>
<br>
<a class="btn btn-primary btn-lg" href="/posts" role="button">Geri Dön</a>
<br>
<br>
    <h1>{{$event->title}}</h1>
    
    <img style="width:50%" src="/storage/cover_images/{{$event->cover_image}}">


    <hr>
    
    <div>
            {!!$event->description!!}
    </div>
    <hr>
    <small>Başlangıç tarihi {{$event->start}}</small>
    <hr>
    <small>Bitiş Tarihi : {{$event->end}}</small>
    <hr>

    @php
    $start_time = \Carbon\Carbon::parse($event->start);
    $end_time = \Carbon\Carbon::parse($event->end);
    $nowDays =  Carbon\Carbon::now()->diffInDays($start_time);
    $totalDays = $end_time->diffInDays($start_time);
    $currentInPercentage = $nowDays / $totalDays * 100;
    $remainingDonation = $event->targetMoney - $event->currentMoney;
    $remainingPercentage = $event->currentMoney / $event->targetMoney * 100;
@endphp

    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{ $currentInPercentage }}%" aria-valuenow="{{ $nowDays }}" aria-valuemin="0" aria-valuemax="{{ $totalDays }}">{{$totalDays - $nowDays}} gün kaldı.</div>
    </div>

    <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ $remainingPercentage }}%" aria-valuenow="{{ $event->currentMoney }}" aria-valuemin="0" aria-valuemax="{{ $event->targetMoney }}">
                @if($event->completed)
                    Bağış tamamlandı.
                @else
                    {{$remainingDonation}} kaldı.
                @endif
            </div>
    </div>

    <div>Yapılan bağış {{ $event->currentMoney }}</div>
    <div>Beklenen bağış {{ $event->targetMoney }} </div>
    
    

    {!!Form::open(['action' => ['DonateController@create', $event->id], 'method' => 'GET', 'class' => 'pull-right' ])!!}
        {{Form::hidden('eventId' , $event->id)}}
        {{Form::submit('Bağış Yap', ['class' => 'btn btn-primary'])}}
    {!!Form::close()!!}

    @role('ngo')
    



    {!!Form::open(['action' => ['DonationEventController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Sil', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

    @endrole
@endsection

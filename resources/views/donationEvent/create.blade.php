@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <h1>Bağış Oluştur</h1>
    {!! Form::open(['action' => 'DonationEventController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Bağış Adı')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Etkinlik Adı'])}}

        </div>
        <div class="form-group">
                {{Form::label('description', 'Açıklama')}}
                {{Form::textarea('description', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Açıklama'])}}
        </div>

        <div class="form-group">
            {{Form::label('start', 'Başlangıç')}}
            {!! Form::date('start', Carbon\Carbon::now()->format('d/m/Y'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
            {{Form::label('end', 'Bitiş ')}}
            {!! Form::date('end', Carbon\Carbon::now()->format('d/m/Y'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        <div class="form-group">
            {{Form::label('targetMoney', 'İstenen Para')}}
            {!! Form::number('targetMoney', 0, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
       {{Form::submit('Gönder', ['class' => 'btn btn-primary'])}}
            
    {!! Form::close() !!}
    
    
@endsection

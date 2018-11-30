@extends('layouts.app')

@section('content')

    <h1>Etkinlik Oluştur</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Etkinlik Adı')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Etkinlik Adı'])}}

        </div>
        <div class="form-group">
                {{Form::label('body', 'Açıklama')}}
                {{Form::textarea('body', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Açıklama'])}}
    
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}

        </div>
       {{Form::submit('Gönder', ['class' => 'btn btn-primary'])}}
            
    {!! Form::close() !!}
    

@endsection

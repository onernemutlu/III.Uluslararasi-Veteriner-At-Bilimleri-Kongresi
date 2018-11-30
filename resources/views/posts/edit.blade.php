@extends('layouts.app')

@section('content')

    <h1>Etkinlik Düzenle</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Etkinlik Adı')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Etkinlik Adı'])}}

        </div>
        <div class="form-group">
                {{Form::label('body', 'Açıklama')}}
                {{Form::textarea('body', $post->body, ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Açıklama'])}}
    
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
    
        </div>
       {{Form::hidden('_method', 'PUT')}} 
       {{Form::submit('Gönder', ['class' => 'btn btn-primary'])}}
            
    {!! Form::close() !!}
    

@endsection

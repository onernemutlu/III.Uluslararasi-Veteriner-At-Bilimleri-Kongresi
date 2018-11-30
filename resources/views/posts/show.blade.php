@extends('layouts.app')

@section('content')
<hr>
<a class="btn btn-primary btn-lg" href="/posts" role="button">Geri Dön</a>
    <hr>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}

    </div>
    <hr>
    <small>Eklenme Tarihi : {{$post->created_at}}</small>
    <hr>
    <small>Son Düzenlenme Tarihi : {{$post->updated_at}} | Düzenleyen : {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)

            <a class="btn btn-outline-success my-1 my-sm-0" href="/posts/{{$post->id}}/edit" role="button">Düzenle</a>
            <hr>


            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Sil', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
    <hr>
@endsection

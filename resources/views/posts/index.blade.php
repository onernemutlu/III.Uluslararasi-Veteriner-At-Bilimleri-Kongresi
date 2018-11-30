@extends('layouts.app')

@section('content')

    <h1>Etkinlikler</h1>
    @if(count($posts) > 0)
        
            @foreach($posts as $post)
                <div class="well">

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <hr>
                                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                
                            </div>

                            <div class="col-md-8 col-sm-8">
                                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            
                                    <small>Eklenme Tarihi : {{$post->created_at}} | Ekleyen : {{$post->user->name}}</small>
                                    <hr>
                            </div>
                        </div>
                            
                        
                </div>
            @endforeach
            {{$posts->links()}}    
    @else
        <p>Etkinlik Bulunamadı</p>
    @endif

@endsection

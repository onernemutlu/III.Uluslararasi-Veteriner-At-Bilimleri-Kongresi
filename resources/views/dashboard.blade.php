@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">OtizART</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                    Başarıyla Giriş Yaptınız ! - OtizART.com'a Hoş Geldiniz.
                    <hr>
                    <a href="/posts/create" class="btn btn-primary">Etkinlik Oluştur</a>
                    <hr>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Etkinlikleriniz</th>
                                <th></th>
                                <th></th>



                            </tr>  
                            @foreach($posts as $post) 
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a class="btn btn-outline-success my-1 my-sm-0" href="/posts/{{$post->id}}/edit" role="button">Düzenle</a></td>
                                    <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Sil', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close() !!}
                                    </td>
                                </tr>
                            
                            @endforeach
                        </table>
                        @else
                            <p>Henüz Sistemde Kayıtlı Bir Etkinliğiniz Bulunmamaktadır</P>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

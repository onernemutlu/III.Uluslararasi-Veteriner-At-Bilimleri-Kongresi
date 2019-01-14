@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <center><div class="card-header"><h3 class="display-3">Otiz<font color="red">A</font><font color="orange">R</font><font color="blue">T</font> Yönetim Paneli </h3></div></center>

                <div class="jumbotron">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                   
                    
                    @role('admin')
                    <center><h2 class="display-7">Admin Yönetim Paneli</h2></center>
                    
                    @endrole

                    @role('ngo')  
                    
                    <center><h2 class="display-7">Başarıyla Giriş Yaptınız ! - OtizART'a Hoş Geldiniz.</h2></center>
                    <hr>             
                    <a href="/posts/create" class="btn btn-primary">Etkinlik Oluştur</a>
                    <a href="/products/create" class="btn btn-primary">Ürün Ekle</a>
                    <a href="/donationEvent/create" class="btn btn-primary">Süreli Bağış Oluştur</a>

                    @endrole

                      

                    @role('private')
                    @if(Auth()->user()->confirmed)
                    <center><h2 class="display-7">Başarıyla Giriş Yaptınız ! - OtizART'a Hoş Geldiniz.</h2></center>
                    <hr>
                    <a href="/products/create" class="btn btn-primary">Ürün Ekle</a>
                    @else
                    <p>Hesabınız üzerinde ürün eklenememektedir. Üyelik onay sürecindedir...</p>
                    @endif
                    @endrole

                    
                    <hr>

                    
                    <div class="jumbotron">

                        @if($posts &&  count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Etkinlikleriniz</th>
                                <th></th>
                                <th></th>
                                <th></th>



                            </tr>  
                             
                            @foreach($posts as $post) 
                                @if($post->confirmed)
                                <tr class="table-success">
                                @else
                                <tr class="table-danger">
                                @endif
                                    <td>{{$post->title}}</td>
                                    <td><a class="btn btn-primary my-1 my-sm-0" href="/posts/{{$post->id}}/edit" role="button">Düzenle</a></td>
                                    @role('admin')
                                    @if(!$post->confirmed)
                                        <td><a class="btn btn-success my-1 my-sm-0" href="{{  route('admin.post.confirm' , ['id' => $post->id]) }}" role="button">Onayla</a></td>
                                    @else
                                        <td></td>
                                    @endif
                                    @endrole
                                   
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
                            @role('ngo')
                            <p>Henüz Sistemde Kayıtlı Bir Etkinliğiniz Bulunmamaktadır</P>
                            @endrole
                        @endif
                        
                    </div>         
                        <hr>
                    <div class="jumbotron">   
                        @if($products &&  count($products) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Ürünleriniz</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>



                                </tr>  
                            
                            @foreach($products as $products) 
                                @if($products->confirmed)
                                <tr class="table-success">
                                @else
                                <tr class="table-danger">
                                @endif
                                    <td>{{$products->title}}</td>
                                     
                                    <td><a class="btn btn-primary my-1 my-sm-0" href="/products/{{$products->id}}/edit" role="button">Düzenle</a></td>
                                    @role('admin')
                                    @if(!$products->confirmed)
                                        <td><a class="btn btn-success my-1 my-sm-0" href="{{  route('admin.product.confirm' , ['id' => $products->id]) }}" role="button">Onayla</a></td>
                                    @else
                                        <td></td>
                                    @endif
                                    
                                    @endrole
                                    <td>
                                            {!!Form::open(['action' => ['ProductsController@destroy', $products->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Sil', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close() !!}
                                    </td>
                                </tr>
                            
                            @endforeach
                        </table>
                        @else
                            @role('private')
                            <p>Henüz Sistemde Kayıtlı Bir Ürününüz Bulunmamaktadır</P>
                            @endrole
                        @endif
                    </div>

                        <hr>
                    <div class="jumbotron">
                        @role('admin')
                        @if($users &&  count($users) > 0)
                        <table class="table table-striped">
                             <tr>
                                 <th>Üyeler</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                             </tr>
                            
                            @foreach($users as $user) 
                            <td>{{$user->name}}</td>
                                @if($user->confirmed)
                                <tr class="table-success">
                                @else
                                <tr class="table-danger">
                                @endif
                                    <td>{{$user->title}}</td>
                                    <td><a class="btn btn-primary my-1 my-sm-0" href="{{ route('private.users.show') }}" role="button">Düzenle</a></td>
                                    
                                    @if(!$user->confirmed)
                                        <td><a class="btn btn-success my-1 my-sm-0" href="{{  route('user.confirm' , ['id' => $user->id]) }}" role="button">Onayla</a></td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                    {!!Form::open(['action' => ['UserDeleteController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::hidden('id', $user->id)}}
                                    {{Form::submit('Sil', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close() !!}
                                    </td>
                                   
                                    
                                </tr>
                            
                            @endforeach
                        </table>
                        
                       
                        @endif
                        @endrole
                    </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

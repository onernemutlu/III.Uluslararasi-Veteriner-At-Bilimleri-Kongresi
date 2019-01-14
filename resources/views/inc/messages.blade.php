@if(count($errors)>0)
    @foreach($errors -> all() as $error)

        <div class="alert alert-danger">
                <br>
                <br>
                <br>
            {{$error}}
        </div>

    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success">
            <br>
            <br>
            <br>
            {{session('success')}}
        </div>

@endif

@if(session('success'))
        <div class="alert alert-danger">
                <br>
                <br>
                <br>
            {{session('error')}}
        </div>

@endif

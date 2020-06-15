@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div id="alertat" class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div id="alertat" class="alert alert-success">
            {{session('success')}}
            <i id="success-tick" class="fas fa-check fa-4x animated rotateIn"></i>
        </div>
@endif

@if(session('info'))
        <div id="alertat" class="alert alert-info">
            {{session('info')}}
            <i id="info-tick" class="fas fa-check fa-4x animated rotateIn"></i>
        </div>
@endif

@if(session('error'))
        <div id="alertat" class="alert alert-danger">
            {{session('error')}}
        </div>
@endif
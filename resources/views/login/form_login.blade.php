@extends('layouts.plantilla')

@section('title','login')

@section('content')

<body>


<form  method="POST">

@csrf
    <div class="form-group">

    <h1>Login</h1>

    <pre>{{Auth::user()}}</pre>

     <label>User</label>
     <input type="email" name="email" class="form-control"  placeholder="correoelectronico@gmail.com" />
    </div>
    <div class="form-group">
     <label>Contraseña</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
    <button class="btn btn-primary mb-3" type="submit">Send</button>
    </div>
</form>
  </div>
</body>

@endsection
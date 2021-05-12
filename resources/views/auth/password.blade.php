@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Recuperar Contrasenya</h1>
        <form class="form-control" action="{{ route('auth.password') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input class="form-control" type="mail" name="email" required/>
            </div>
            <div class="form-group">
                <a href="{{ url('sendpassword') }}">Indiqui el seu correu electrònic i li enviarem un mail per restablir la seva contrasenya.</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>            
        </form>
    </div>
@endsection
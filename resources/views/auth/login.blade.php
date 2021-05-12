@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>LOGIN</h1>
        <br/>
        <form class="form-control" action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input class="form-control" type="mail" name="email" required/>
            </div>
            <div class="form-group">
                <label for="password">Contrasenya</label>
                <input class="form-control" type="password" name="password" required/>
            </div>
            <div class="form-group">
                <a href="{{ route('password') }}">¿Has oblidat la teva contrasenya?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>            
        </form>
    </div>
@endsection


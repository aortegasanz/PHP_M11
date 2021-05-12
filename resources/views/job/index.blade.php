@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>FEINES</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        <br/>
        @if (isset($jobs))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Nom</strong></td>
                    <td><strong>Accions</strong></td>
                </tr>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{{ $job->name }}</td>
                    <td>
                        <a href="#"><i class="far fa-eye"></i></a>  
                        <a href="#"><i class="fas fa-plus-square"></i></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a> 
                        <a href="#"><i class="fas fa-trash-alt"></i></a> 
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection
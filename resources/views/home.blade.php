@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>HOME</h1>        
        <br/>
        @if (isset($logout)) 
            <div class="alert alert-success">{{ $logout }}</div>
        @endif
        @if (isset($password)) 
            <div class="alert alert-success">{{ $password }}</div>
        @endif
        @if (isset($register)) 
            <div class="alert alert-success">{{ $register }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach    
        <!--
        <br/>
        <div class="row">
            <div class="col"><a href="{{ route('employee.list') }}" class="text-sm text-gray-700 underline">EMPLEATS</a></div>
            <div class="col"><a href="{{ route('job.list') }}"      class="text-sm text-gray-700 underline">FEINES</a></div>
        </div>
        -->
    </div>
@endsection

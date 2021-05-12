@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EMPLEATS</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif    
        @if ($employee)
            <div class="row">
                <div class="col-4">
                    <strong>#</strong>
                </div>
                <div class="col-auto">
                    {{ $employee->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Nom</strong>
                </div>
                <div class="col-auto">
                    {{ $employee->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Cognoms</strong>
                </div>
                <div class="col-auto">
                    {{ $employee->surname }}
                </div>            
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Feina</strong>
                </div>
                <div class="col-auto">
                    {{ $employee->job->name }}
                </div>            
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <a href=" {{ route('employee.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        @endif
    </DIV>
@endsection
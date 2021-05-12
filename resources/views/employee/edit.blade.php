@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EMPLEATS</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        @if ($employee)
            <form action="{{ route('employee.store') }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $employee->id }}"/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Nom</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="text" name="name" value="{{ $employee->name }}">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Cognoms</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="text" name="surname" value="{{ $employee->surname }}">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Feina</label>
                    </div>
                    <div class="col-auto">                    
                        <select class="form-control" name="job_id">
                            <option value="">-</option>
                        @if (isset($jobs))
                            @foreach ($jobs as $job)
                                @if ($job->id == $employee->job->id)
                                    <option value="{{ $job->id }}" selected>{{ $job->name }}</option>
                                @else
                                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                                @endif
                            @endforeach
                        @endif
                        </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-primary" type="submit" value="create">Actualitzar</input> 
                    </div>
                    <div class="col-2">
                        <a href=" {{ route('employee.list') }}" class="btn btn-secondary">Tornar</a> 
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EMPLEATS</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        <form action="{{ route('employee.store') }}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Nom</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Cognoms</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="surname">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Feina</label>
                </div>
                <div class="col-auto">                    
                    <select class="form-control" name="job_id">
                    @if (isset($jobs))
                        @foreach ($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endforeach
                    @endif
                    </select>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-primary" type="submit" value="create">Enmagatzemar</input> 
                </div>
                <div class="col-2">
                    <a href=" {{ route('employee.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        </form>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EMPLEADOS</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        <br/>
        <form name="searchJob" action="{{ route('employee.search.job') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-auto">
                    <label class="form-label">Buscador Empleats per Feina</label>
                </div>
                <div class="col-auto">
                    <select class="form-control" name="job_id">
                        <option value="0">-tots-</option>
                        @if (isset($jobs))
                            @foreach ($jobs as $job)
                                <option value="{{ $job->id }}">{{ $job->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>                    
                <div class="col-2">
                    <button class="btn btn-primary" type="submit" value="create">Buscar</input> 
                </div>                
            </div>            
        </form>
        <br/>
        <a class="btn btn-primary" href="{{ route('employee.create') }}">Nou Empleat</a>
        <br/><br/>
        @if (isset($employees))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Nom</strong></td>
                    <td><strong>Cognoms</strong></td>
                    <td><strong>Feina</strong></td>
                    <td><strong>Accions</strong></td>
                </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->surname }}</td>
                    <td>{{ $employee->job->name }}</td>
                    <td>
                        <a href="{{ route('employee.show', $employee->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('employee.edit', $employee->id) }}"><i class="fas fa-edit"></i></a> 
                        <form action="{{ route('employee.delete', $employee->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $employee->id }}"/>
                            <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection
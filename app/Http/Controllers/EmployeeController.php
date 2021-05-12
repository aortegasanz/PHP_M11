<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Job;

class EmployeeController extends Controller
{

    public function index() {
        $employees = Employee::all();
        $jobs = Job::all();
        $pageContent = 'Llista de Empleats';
        return view('employee.index', compact('pageContent', 'employees', 'jobs'));
    }   

    public function show($id) {
        $employee = Employee::findOrFail($id);
        $pageContent = 'Vista Detall Empleat';
        return view('employee.show', compact('pageContent', 'employee'));
    }

    public function create(Request $request) {
        $jobs = Job::all();
        return view('employee.create', ['pageContent' => 'Afegir empleat', 'jobs' => $jobs]);
    }

    public function edit(Request $request, $id) {
        $employee = Employee::findOrFail($id);
        $jobs = Job::all();
        $pageContent = 'Vista Edició Empleat';
        return view('employee.edit', compact('pageContent', 'employee', 'jobs'));
    }

    public function delete(Request $request) {
        $employee = Employee::findOrFail($request->id);
        $employee->delete();
        return redirect()->route('employee.list')->with(['success' => 'Dades esborrades correctament.']);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required:max:255',
            'surname' => 'required:max:255',
            'job_id' => 'required',
        ]);
        if (Employee::find($request->id)) {
            $employee = Employee::findOrFail($request->id);
        } else {
            $employee = new Employee;
        }
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->job_id = $request->job_id;
        $employee->save();   
        return redirect()->route('employee.list')->with(['success' => 'Dades enmagatzemades correctament.']);
    }

    public function searchJob(Request $request) {
        $jobs = Job::all();
        if ($request->job_id == 0) {
            $employees = Employee::all();
            $pageContent = 'Llista de Empleats';    
        } else {
            $job = Job::find($request->job_id);
            $employees = [];
            if ($job) {
                $employees = Employee::where('job_id', $job->id)->get();
            }
            $pageContent = 'Llista de Empleats (FILTRE : '.$job->name.')';    
        }        
        
        return view('employee.index', compact('pageContent', 'employees', 'jobs'))->with(['success' => 'Dades FILTRADES.']);
    }
    
}
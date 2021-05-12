<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function index() {
        $jobs = Job::all();
        $pageContent = 'Llista de Feines';
        return view('job.index', compact('pageContent', 'jobs'));
    }   

}

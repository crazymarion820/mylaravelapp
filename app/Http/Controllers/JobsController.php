<?php

namespace App\Http\Controllers;

use App\Job;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $jobs = Job::where('user_id', '=', $user->id)->get();
        return view('jobs.index', compact('jobs', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('jobs.create', compact('user'));
    }

    public function store()
    {
        $job = new Job(Request::all());
        Auth::user()->jobs()->save($job);
        return redirect('jobs');
    }
}

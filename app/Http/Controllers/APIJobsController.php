<?php

namespace App\Http\Controllers;

use App\Job;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class APIJobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        $user = JWTAuthenticateController::getJWTAuthenticatedUser();
        $jobs = Job::where('user_id', '=', $user->id)->get();
        return $jobs;
    }

    public function store()
    {
        $user = JWTAuthenticateController::getJWTAuthenticatedUser();
        $job = new Job(Request::all());
        return $user->jobs()->save($job);
    }
}

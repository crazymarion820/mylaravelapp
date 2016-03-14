<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('jobs.index', compact('user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('jobs.create', compact('user'));
    }
}

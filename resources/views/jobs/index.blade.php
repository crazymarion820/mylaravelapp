@extends('layout.main')
@section('header-nav-bar')
    <a href="/auth/logout" class="btn-danger pull-right">Logout</a>
@stop
@section('content')
    <h1>Jobs of {{ $user->name }}</h1>
    <hr>
    <div class="form-group">
        <div class="">
            <a type="submit" class="btn btn-primary" href="/jobs/create">
                Create New Job
            </a>
        </div>
    </div>

    @foreach($jobs as $job)
        <article>
            <h3>
                {{ $job->name }}
            </h3>
            <p>{{ $job->duration }}min   |    ${{ $job->cost }}</p>
        </article>
    @endforeach
@stop
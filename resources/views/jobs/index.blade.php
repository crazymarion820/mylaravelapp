@extends('layout.main')
@section('header-nav-bar')
    <a href="/auth/logout" class="btn-danger pull-right">Logout</a>
@stop
@section('content')
    <h1>Jobs of {{ $user->name }}</h1>
    <hr>
@stop
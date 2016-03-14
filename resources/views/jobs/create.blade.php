@extends('layout.main')
@section('content')
    <h1>{{ $user->name }} Create New Job</h1>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Job</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong>There are some problems with your inputs
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" role="form" action="/jobs/store">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Job Name</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="name" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Duration</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="duration">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cost</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="cost">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
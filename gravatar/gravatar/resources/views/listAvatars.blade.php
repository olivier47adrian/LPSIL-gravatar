@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a class="btn btn-success btn-lg" href="{{ url('/avatars/add') }}" role="button"><span class="glyphicon glyphicon-plus"></span></a>
            <div class="panel panel-default">
                <div class="panel-heading">List of avatars</div>

                <div class="panel-body">
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
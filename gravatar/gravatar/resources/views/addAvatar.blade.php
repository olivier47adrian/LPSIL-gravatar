@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add an avatar</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addAvatar') }}">


                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="file">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-sign-in"></i>Add this avatar
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add an avatar</div>
                    <div class="panel-body">
                        {{ Form::open(array('url' => '/addAvatar', 'method' => 'post', 'files'=> true, 'onsubmit' => 'verifImage(this); return false;')) }}
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {{Form::email('email','',array('required' => 'required')) }}

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">

                                {{Form::file('image') }}

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{Form::submit('Add this avatar')}}

                            </div>
                        </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function verifImage() {
            alert("test");
            image = document.getElementById("image");
            console.log(image.value);
            return false;
        }
    </script>
@endsection
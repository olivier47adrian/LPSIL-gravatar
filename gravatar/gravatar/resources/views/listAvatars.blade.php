@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a class="btn btn-success btn-lg" href="{{ url('/avatars/add') }}" role="button"><span class="glyphicon glyphicon-plus"></span></a>
            <div class="panel panel-default">
                <div class="panel-heading">List of avatars</div>

                <div class="panel-body">
                    <table>
                        <tr>
                            <th width="100">Id :</th>
                            <th>email : </th>
                            <th>srcImage : </th>
                            <th>Option : </th>
                        </tr>
                    @foreach ($tabRow as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->email }}</td>
                                <td><img alt="#" width="100" src="{{$row->srcImage }}"/></td>
                                <td><a href="{{ url('/removeAvatar') }}/{{$row->id}}" onclick="return confirm('&Ecirc;tes-vous sûr de vouloir supprimer ?')"><span class="glyphicon glyphicon-remove" style="color: red; font-size: 40px;"></span></a></td>
                            </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
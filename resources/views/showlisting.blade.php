@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if($listing)
                <div class="panel-heading"><span class="pull-left"><a class="btn btn-info btn-sm" href="/">Back</a></span><h3 class="text-center">{{$listing->name}}</h3></div>
                    <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                           <h4>Email: <span class="pull-right">{{$listing->email}}</span></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Phone: <span class="pull-right">{{$listing->phone}}</span></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Address: <span class="pull-right">{{$listing->address}}</span></h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Website: <span class="pull-right">{{$listing->website}}</span></h4>
                        </li>
                    </ul>
                        <hr>
                        <div class="well">{{$listing->bio}}</div>

                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
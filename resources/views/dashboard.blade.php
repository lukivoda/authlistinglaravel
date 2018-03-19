@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Business Listings <span class="pull-right "><a class="btn btn-success btn-xs " href="{{route('listings.create')}}">Create listing</a></span></div>

                <div class="panel-body">
                  @if(count($listings) > 0)
                      <h3 class="text-center">Company Names</h3>
                      <ul class="list-group">
                      @foreach($listings as $listing)
                    <li style="overflow: hidden" class="list-group-item "> <a class="pull-left" href="{{route('listings.edit',$listing->id)}}">{{$listing->name}} </a>

                        <span class="pull-right">
                                  {!! Form::open(['route' => ['listings.destroy',$listing->id ], 'method' => 'DELETE','onsubmit' => ' return confirm("Are you sure?")']) !!}
                            {{ Form::bsSubmit('Delete',array_merge(['class' => 'btn btn-danger'])) }}
                            {!! Form::close() !!}
                              </span>

                    </li>



                      @endforeach
                      </ul>
                  @endif
                </div>
            </div>
        </div>
    </div>
@endsection

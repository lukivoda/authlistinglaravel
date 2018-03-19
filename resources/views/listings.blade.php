@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3 class="text-center">Latest Business Listings </h3></div>

                <div class="panel-body">
                    @if(count($listings) > 0)
                        <h4 class="text-center">Company Names</h4>
                        <ul class="list-group">
                            @foreach($listings as $listing)
                                <li style="overflow: hidden" class="list-group-item "> <a href="{{route('listings.show',$listing->id)}}">{{$listing->name}} </a>

                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No listings found</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="pull-left"><a class="btn btn-info btn-sm" href="/dashboard">Back</a></span><h3 class="text-center">Edit listing</h3></div>

                <div class="panel-body">
                    @if($listing)
                    {!! Form::open(['route' => ['listings.update',$listing->id],'method' =>'PUT'] ) !!}
                    {{--empty string is value--}}
                    {{ Form::bsText('name',$listing->name,array_merge(['placeholder' => 'Company name']) ) }}
                    {{ Form::bsText('website',$listing->website,array_merge(['placeholder' => 'Company website']) ) }}
                    {{ Form::bsText('email',$listing->email,array_merge(['placeholder' => 'Company email']) ) }}
                    {{ Form::bsText('phone',$listing->phone,array_merge(['placeholder' => 'Company phone']) ) }}
                    {{ Form::bsText('address',$listing->address,array_merge(['placeholder' => 'Company address']) ) }}
                    {{ Form::bsTextArea('bio',$listing->bio,array_merge(['placeholder' => 'About this business']) ) }}
                    {{ Form::bsSubmit() }}
                        {!! Form::close() !!}
                     @endif
                </div>
            </div>
        </div>
    </div>
@endsection
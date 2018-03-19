@extends('layouts.app')
@section('content')
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="text-center">Create listing</h3></div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'listings.store']) !!}
                       {{--empty string is value--}}
                        {{ Form::bsText('name','',array_merge(['placeholder' => 'Company name']) ) }}
                        {{ Form::bsText('website','',array_merge(['placeholder' => 'Company website']) ) }}
                        {{ Form::bsText('email','',array_merge(['placeholder' => 'Company email']) ) }}
                        {{ Form::bsText('phone','',array_merge(['placeholder' => 'Company phone']) ) }}
                        {{ Form::bsText('address','',array_merge(['placeholder' => 'Company address']) ) }}
                        {{ Form::bsTextArea('bio','',array_merge(['placeholder' => 'About this business']) ) }}
                        {{ Form::bsSubmit() }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection
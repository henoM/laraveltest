@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Homes</strong> Elements
            </div>
            <div class="card-body card-block">
                {{--<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">--}}
                {!! Form::open(['route' => 'user.home.store','enctype'=>'multipart/form-data','class' => 'form-horizonta']) !!}
                    <div class="row form-group">
                        <div class="col col-md-3">{!!  Form::label('name', 'Name',['class' => 'form-control-label'])!!}</div>
                        <div class="col-12 col-md-9">
                            {!!  Form::text('name', null, ['class' => 'form-control'])!!}<small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">{!!  Form::label('name', 'Image',['class' => 'form-control-label'])!!}</div>
                        <div class="col-12 col-md-9">{!!  Form::file('file', null, ['class' => 'imgInp form-control','id'=>'imgInp'])!!}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">{!!  Form::label('name', 'Peoples',['class' => 'form-control-label'])!!}</div>
                        <div class="col-12 col-md-9">
                            {!! Form::select('people', $select ,array('class' => 'form-control'))!!}
                            {{--<select name="selectSm" id="SelectLm" class="form-control-sm form-control">--}}
                                {{--<option value="0">Please select</option>--}}
                                {{--<option value="1">Option #1</option>--}}
                                {{--<option value="2">Option #2</option>--}}
                                {{--<option value="3">Option #3</option>--}}
                                {{--<option value="4">Option #4</option>--}}
                                {{--<option value="5">Option #5</option>--}}
                            {{--</select>--}}
                        </div>
                    </div>
                <div class="form-actions form-group"> {!!  Form::submit('Add', ['class' => 'btn btn-primary'])!!}</div>
                {!! Form::close() !!}
            </div>
    </div>
@endsection
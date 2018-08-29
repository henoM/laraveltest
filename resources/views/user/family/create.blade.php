@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Homes</strong> Elements
            </div>
            <div class="card-body card-block">
                {{--<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">--}}
                {!! Form::open(['route' => 'user.peoaple.store','enctype'=>'multipart/form-data','class' => 'form-horizonta']) !!}
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('first_name', 'First Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('first_name', null, ['class' => 'form-control'])!!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('last_name', 'Last Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('last_name', null, ['class' => 'form-control'])!!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('age', 'Age',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('age', null, ['class' => 'form-control'])!!}
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                {!!  Form::label('gender', 'Man',['class'=>'form-check-label'])!!}
                                {!!  Form::radio('gender', 'man', true,['class'=>'form-check-input'])!!}
                                    {{--<input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1--}}

                            </div>
                            <div class="radio">
                                {!!  Form::label('gender', 'Female',['class'=>'form-check-label'])!!}
                                {!!  Form::radio('gender', 'female', true,['class'=>'form-check-input'])!!}
                                    {{--<input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2--}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('name', 'Homes',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!! Form::select('home', $select ,array('class' => 'form-control'))!!}
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



    {{--<div class="breadcrumbs">--}}
        {{--<div class="col-sm-4">--}}
            {{--<div class="page-header float-left">--}}
                {{--<div class="page-title">--}}
                    {{--<h1>Dashboard</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-8">--}}
            {{--<div class="page-header float-right">--}}
                {{--<div class="page-title">--}}
                    {{--<ol class="breadcrumb text-right">--}}
                        {{--<li><a href="#">Dashboard</a></li>--}}
                        {{--<li><a href="#">Table</a></li>--}}
                        {{--<li class="active">Data table</li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="content mt-3">--}}
        {{--<div class="animated fadeIn">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-header">--}}
                            {{--<strong class="card-title">Add People</strong>--}}
                        {{--</div>--}}
                        {{--<div class="form-inline">--}}
                            {{--{!! Form::open(array('route' => 'user.peoaple.store')) !!}--}}

                            {{--{!!  Form::label('firstName', 'First Name')!!}--}}
                            {{--{!!  Form::text('first_name', null, ['class' => 'form-control'])!!}--}}
                            {{--<br><br>--}}
                            {{--{!!  Form::label('lastName', 'Last Name')!!}--}}
                            {{--{!!  Form::text('Last_name', null, ['class' => 'form-control'])!!}--}}
                            {{--<br><br>--}}
                            {{--{!!  Form::label('age', 'Age')!!}--}}
                            {{--{!!  Form::text('age', null, ['class' => 'form-control'])!!}--}}
                            {{--<br><br>--}}
                            {{--{!! Form::select('home', $select )!!}--}}
                            {{--<br><br>--}}
                            {{--{!!  Form::label('gender', 'Man')!!}--}}
                            {{--{!!  Form::radio('gender', 'man', true);!!}--}}
                            {{--{!!  Form::label('gender', 'Female')!!}--}}
                            {{--{!!  Form::radio('gender', 'female', true);!!}--}}


                            {{--<br><br>--}}
                            {{--{!!  Form::submit('Add', ['class' => 'btn btn-primary'])!!}--}}

                            {{--{!! Form::close() !!}--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
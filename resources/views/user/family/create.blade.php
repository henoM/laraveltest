@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Add</strong> People
            </div>
            <div class="card-body card-block">
                {{--<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">--}}
                {!! Form::open(['route' => 'user.peoaple.store','class' => 'form-horizonta']) !!}
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('first_name', 'First Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('first_name', null, ['class' => 'form-control'])!!}
                        @if ($errors->has('first_name'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('first_name') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('last_name', 'Last Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('last_name', null, ['class' => 'form-control'])!!}
                        @if ($errors->has('last_name'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('last_name') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('age', 'Age',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('age', null, ['class' => 'form-control'])!!}
                        @if ($errors->has('age'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('age') }}</strong>
		                    </span>
                        @endif
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
                        {!! Form::select('home', $select ,null,['multiple'=>'multiple','name'=>'home[]','class' => 'form-control-sm form-control'])!!}
                    </div>
                </div>
                <div class="form-actions form-group"> {!!  Form::submit('Add', ['class' => 'btn btn-primary'])!!}</div>
                {!! Form::close() !!}
            </div>
        </div>

@endsection
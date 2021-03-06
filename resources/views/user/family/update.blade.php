@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Homes</strong> Elements
            </div>
            <div class="card-body card-block">

                {!! Form::model($people, ['route' => ['family.people.edit', $people->id],'enctype'=>'multipart/form-data','class' => 'form-horizonta']) !!}
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('first_name', 'First Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('first_name', $people->first_name, ['class' => 'form-control'])!!}
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
                        {!!  Form::text('last_name',$people->last_name, ['class' => 'form-control'])!!}
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
                        {!!  Form::text('age',$people->age, ['class' => 'form-control'])!!}
                        @if ($errors->has('age'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('age') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('name', 'Homes',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!! Form::select('home', $select ,null,['multiple'=>'multiple','name'=>'home[]','class' => 'form-control-sm form-control'])!!}
                    </div>
                </div>
                <div class="form-actions form-group"> {!!  Form::submit('Update', ['class' => 'btn btn-primary'])!!}</div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection
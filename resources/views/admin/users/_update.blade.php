@extends('admin.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Homes</strong> Elements
            </div>
            <div class="card-body card-block">

                {!! Form::model($user, ['route' => ['admin.user.edit', $user->id],'enctype'=>'multipart/form-data','class' => 'form-horizonta']) !!}
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('name', 'Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('name',$user->name, ['class' => 'form-control'])!!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('name') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('address', 'Address',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('address',$user->address, ['class' => 'form-control'])!!}
                        @if ($errors->has('address'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('address') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-actions form-group"> {!!  Form::submit('update', ['class' => 'btn btn-primary'])!!}</div>
                {!! Form::close() !!}
            </div>
        </div>
@endsection
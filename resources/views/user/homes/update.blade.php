@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Update Home</strong>
            </div>
            <div class="card-body card-block"> 
                {!! Form::model($home, ['route' => ['user.home.edit', $home->id],'enctype'=>'multipart/form-data','class' => 'form-horizonta']) !!}
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('name', 'Name',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!!  Form::text('name',$home->name, ['class' => 'form-control'])!!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('name') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">

                    <div class="col col-md-3">{!!  Form::label('name', 'Image',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        <img src="{{$home->name}}" style="height: 100px;width: 100px;"><br>
                        {!!  Form::file('file', null, ['class' => 'imgInp form-control','id'=>'imgInp'])!!}<br>
                        @if ($errors->has('file'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('file') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">{!!  Form::label('name', 'Peoples',['class' => 'form-control-label'])!!}</div>
                    <div class="col-12 col-md-9">
                        {!! Form::select('people', $select ,null,['multiple'=>'multiple','name'=>'people[]','class' => 'form-control-sm form-control'])!!}
                        @if ($errors->has('people'))
                            <span class="text-danger">
		                    	<strong>{{ $errors->first('people') }}</strong>
		                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-actions form-group"> {!!  Form::submit('Update', ['class' => 'btn btn-primary'])!!}</div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-lg-6" id="img-preview" >

    </div>
@endsection
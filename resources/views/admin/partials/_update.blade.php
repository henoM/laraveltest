@extends('admin.layouts.app')
@section('content')

    {!! Form::open(['route' => ['admin.edit', $user->id],'method' => 'PUT']) !!}

    {!!  Form::label('name', 'First Name')!!}
    {!!  Form::text('name',$user->name, ['class' => 'input100',])!!}

    {!!  Form::submit('update',['class' => 'login100-form-btn'])!!}
    @if ($errors->has('name'))
        <span class="text-danger">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
    @endif
    {!! Form::close() !!}
@endsection
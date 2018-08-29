@extends('user.layouts.app')
@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Data table</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add People</strong>
                        </div>
                        <div class="form-inline">
                            {!! Form::open(array('route' => 'user.peoaple.store')) !!}

                            {!!  Form::label('firstName', 'First Name')!!}
                            {!!  Form::text('first_name', null, ['class' => 'form-control'])!!}
                            <br><br>
                            {!!  Form::label('lastName', 'Last Name')!!}
                            {!!  Form::text('Last_name', null, ['class' => 'form-control'])!!}
                            <br><br>
                            {!!  Form::label('age', 'Age')!!}
                            {!!  Form::text('age', null, ['class' => 'form-control'])!!}
                            <br><br>
                            {!! Form::select('home', $select )!!}
                            <br><br>
                            {!!  Form::label('gender', 'Man')!!}
                            {!!  Form::radio('gender', 'man', true);!!}
                            {!!  Form::label('gender', 'Female')!!}
                            {!!  Form::radio('gender', 'female', true);!!}


                            <br><br>
                            {!!  Form::submit('Add', ['class' => 'btn btn-primary'])!!}

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
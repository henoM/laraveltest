@extends('user.layouts.app')
@section('content')
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">{{$people->first_name}}</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group">

                    <div class="col col-md-3"><label class=" form-control-label">First Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{$people->first_name}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Last Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{$people->last_name}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Age</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{$people->age}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{$people->gender}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Homes - {{$people->first_name}}</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($homes as $home)
                            <tr>
                                <td>{{ $home->name }} </td>
                                <td>chka</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
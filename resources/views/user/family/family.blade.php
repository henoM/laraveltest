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
                            <strong class="card-title">My Family</strong>
                        </div>
                        <div class="form-inline">
                            <a href="{{route('user.people.create')}}" class="btn btn-primary">Add People</a>
                        </div>


                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>

                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Actions</th>
                                </tr>

                                </thead>
                                <tbody>
                                    @foreach($peoples as $people)
                                        <tr>
                                            <td>{{ $people->first_name }} {{ $people->last_name }}</td>
                                            <td>{{ $people->age }}</td>
                                            <td>{{ $people->gender }}</td>
                                            <td>
                                                <a href="{{route('family.people.view', $people->id)}}" class="btn btn-success btn-xs">View</a>
                                                <a href="{{route('family.people.update', $people->id)}}" class="btn btn-primary btn-xs">Update</a>
                                                <a href="{{route('family.people.delete', $people->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
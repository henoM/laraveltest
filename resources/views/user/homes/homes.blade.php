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
                                    <strong class="card-title">Homes</strong>
                                </div>
                        <div class="form-inline">
                            <a href="{{route('user.home.create')}}" class="btn btn-primary">Add Home</a>
                        </div>


                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>

                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Count</th>
                                    <th scope="col">actions</th>
                                </tr>

                                </thead>
                                <tbody>
                                @foreach($homes as $home)
                                    <tr>
                                        <td>{{ $home->name }} </td>
                                        <td>{{ $home->Peoples()->count() }}</td>
                                        <td>
                                            <a href="{{route('user.home.view', $home->id)}}" class="btn btn-success btn-xs">View</a>
                                            <a href="{{route('user.home.update', $home->id)}}" class="btn btn-primary btn-xs">Update</a>
                                            <a href="{{route('user.home.delete', $home->id)}}" class="btn btn-danger btn-xs">Delete</a>
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
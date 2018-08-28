@extends('admin.layouts.app')
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>

                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Is Active</th>
                                <th scope="col">Emails</th>
                                </tr>

                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->is_active }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                        <a href="{{route('admin.user.update', $user->id)}}" class="btn btn-primary btn-xs">Update</a>
                                        <a href="{{route('admin.user.delete', $user->id)}}" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>


@endsection

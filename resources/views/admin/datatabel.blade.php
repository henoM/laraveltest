@extends('admin.layouts.app')
@section('content')
    {{-- Content Header (Page header) --}}
    {{--@component('admin.partials._contentheader', [--}}
    {{--'links' => [--}}
    {{--['title' => 'All Users', 'class' => 'active'],--}}
    {{--],--}}
    {{--])--}}

    {{--@endcomponent--}}
    {{-- Main content --}}
    <section class="content">
        {{-- Main Row --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <i class="fa fa-user-o"></i>
                        <h3 class="box-title">Users List</h3>
                        <a href="#" class="btn btn-warning pull-right">
                            <i class="ion ion-plus"></i> Add New User
                        </a>
                    </div>
                    <div class="box-body">
                        {{-- SUCESS MESSAGE --}}
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <table class="table table-striped table-responsiv" id="all-users">
                            <thead class="bg-orange">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#all-users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('users') !!}',
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'action', orderable: false, searchable: false }
                    // { data: 'role' }
                ],
                // infoCallback: function( settings, start, end, max, total, pre ) {
                //     return "Users " + start + " - " + end +" from "+ total;
                // }
            });
        });
    </script>
@endpush
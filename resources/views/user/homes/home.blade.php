@extends('user.layouts.app')
@section('content')
    <div class="col-lg-7 col-md-7">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Home - {{$home->name}}</strong>
            </div>
            <div class="row">
              <div class="col-md-6 card-body">
                  <div class="mx-auto d-block">
                      <img class="rounded-circle mx-auto d-block" src=" {!! storage_path().'/app/public/'. $home->path !!}" alt="Home image">
                  </div>
              </div>
              <div class="col-md-6 card-body">
                  <div class="mx-auto d-block">
                      <h5 class="text-sm-center mt-2 mb-1">{{$home->name}}</h5>
                      <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$home->address}}</div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Family- {{$home->name}}</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($peoples as $people)
                        <tr>
                            <td>{{ $people->first_name }} </td>
                            <td>{{ $people->last_name }}</td>
                            <td>{{ $people->age }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
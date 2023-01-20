@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div id="main-content">

        @extends('layouts.navbar')

        <div class="row clearfix">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>User Summary</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5 mb-0">
                            <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

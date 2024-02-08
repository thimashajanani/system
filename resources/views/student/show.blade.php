@extends('layouts.app')
@section('content')
    <head>
        <title>student</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Student System</h2>
                    </div>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('update'))
                        <div class="alert alert-info">
                            {{ Session::get('update') }}
                        </div>
                    @endif

                    @if (Session::has('destroy'))
                        <div class="alert alert-info">
                            {{ Session::get('destroy') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Student
                        </a>
                        <br/>
                        <br/>
                        <div class="tableindex-responsive table table-success table-striped">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Name with Initial</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Guardian Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->full_name}}</td>
                                        <td>{{ $item->dob}}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>
                                            <ul>
                                                @foreach($item->guardians as $guardian)
                                                    <li>{{ $guardian->name }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{ route('students.show', ['student' => $item->id]) }}"
                                               class="btn btn-info m-2"> Show</a>
                                            <a href="{{ route('students.edit', ['student' => $item->id]) }}"
                                               class="btn btn-warning ">Edit</a>
                                            <form method="POST"
                                                  action="{{route('students.destroy',['student' => $item->id])}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-danger delete-user"
                                                           value="Delete user">
                                                </div>
                                            </form>
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



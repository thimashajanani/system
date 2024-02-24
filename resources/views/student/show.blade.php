@extends('student.layout')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="add_student" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Student Registration System</h2>
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
                        <a href="{{ url('/students/create') }}" data-bs-toggle="model" data-bs-target="#add_student"  class="btn btn-success btn-sm" title="Add New">
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
                                            <a href="/students/{{$item->id}}/edit"
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



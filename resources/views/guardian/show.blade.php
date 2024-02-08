@extends('guardian.layout')
@section('content')

    <head>
        <title>Bootstrap Example</title>
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
                        <h2>Guardian System</h2>
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
                        <a href="{{ url('/guardians/create') }}" class="btn btn-success btn-sm" title="Add New">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add Guardian
                        </a>
                        <br/>
                        <br/>

                        <div class="tableindex-responsive table table-success table-striped">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Contact</th>
                                    <th>Relationship</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($guardians as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->relationship}}</td>
                                        <td>


                                            <a href="{{ route('guardians.show', ['guardian' => $item->id]) }}"
                                               class="btn btn-info m-2"> Show</a>
                                            <a href="{{ route('guardians.edit', ['guardian' => $item->id]) }}"
                                               class="btn btn-warning ">Edit</a>
                                            <form method="POST"
                                                  action="{{route('guardians.destroy',['guardian' => $item->id])}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-danger delete-user"
                                                           value="Delete user">
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




{{--@extends('student.layout')--}}
{{--@section('content')--}}
{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
{{--    <title>Student Registration Form</title>--}}
{{--</head>--}}

{{--<div class="card">--}}
{{--    <div class="card-header">Students Page</div>--}}
{{--    <div class="card-body">--}}
{{--        <form action="{{ route('students.store') }}" method="POST">--}}
{{--            {!! csrf_field() !!}--}}

{{--                    <!-- Full Name -->--}}
{{--                --}}{{--        <div class="form-group">--}}
{{--                --}}{{--            <label for="fullName">Full Name</label>--}}
{{--                --}}{{--            <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" required>--}}
{{--                --}}{{--        </div>--}}

{{--            <label>Full Name</label></br>--}}
{{--            <input type="text" name="name" id="name" placeholder="Enter Full Name" class="form-control"></br>--}}
{{--            <label>Name with Initial</label></br>--}}
{{--            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Name with Initial" ></br>--}}
{{--            <label>Date of Birth</label></br>--}}
{{--            <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" ></br>--}}
{{--            <label>Address</label></br>--}}
{{--            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" ></br>--}}
{{--            <label>Contact</label></br>--}}
{{--            <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Number" ></br>--}}
{{--            <label>Emile</label></br>--}}
{{--            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" ></br>--}}


{{--            <input type="submit" value="Save" class="btn btn-success"></br>--}}
{{--        </form>--}}
{{--        @if (\Session::has('success'))--}}
{{--            <div class="alert alert-success">--}}
{{--                <ul>--}}
{{--                    <li>{!! \Session::get('success') !!}</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</div>--}}


{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
{{--</body>--}}

{{--</html>--}}

@extends('student.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Student Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                        {!! csrf_field() !!}

                        <!-- Student Details -->
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="Enter Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Name with Initial</label>
                                <input type="text" name="full_name" id="full_name" class="form-control"
                                       placeholder="Enter Name with Initial" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control"
                                       placeholder="Enter Date of Birth" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                       placeholder="Enter Address" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Contact</label>
                                <input type="text" name="contact" id="contact" class="form-control"
                                       placeholder="Enter Contact" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Emile</label>
                                <input type="text" name="email" id="email" class="form-control"
                                       placeholder="Enter Email" required>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="name">Guardian</label>--}}
{{--                                <input type="text" name="guardian" id="guardian" class="form-control"--}}
{{--                                       placeholder="Enter Email" required>--}}
{{--                            </div>--}}
                        <!-- Guardian Details -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Guardian 1 Details</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Guardian 1 input fields -->
                                    <!-- For example: -->
                                    <div class="form-group">
                                        <label for="guardian1_name">Guardian 1 Name</label>
                                        <input type="text" name="guardian1_name" id="guardian1_name"
                                               class="form-control" placeholder="Enter Guardian 1 Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian1_relation">Guardian 1 Relation</label>
                                        <input type="text" name="guardian1_relation" id="guardian1_relation"
                                               class="form-control" placeholder="Enter Guardian 1 Relation">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian1_contact">Guardian 1 Contact</label>
                                        <input type="text" name="guardian1_contact" id="guardian1_contact"
                                               class="form-control" placeholder="Enter Guardian 1 Contact">
                                    </div>

                                </div>
                            </div>

                            <!-- Add two more guardian cards with similar structure for Guardian 2 and Guardian 3 -->

                            <!-- Guardian Details -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Guardian 2 Details</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Guardian 2 input fields -->
                                    <!-- For example: -->
                                    <div class="form-group">
                                        <label for="guardian2_name">Guardian 1 Name</label>
                                        <input type="text" name="guardian2_name" id="guardian2_name"
                                               class="form-control" placeholder="Enter Guardian 2 Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian2_relation">Guardian 2 Relation</label>
                                        <input type="text" name="guardian2_relation" id="guardian2_relation"
                                               class="form-control" placeholder="Enter Guardian 2 relation">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian2_contact">Guardian 2 Contact</label>
                                        <input type="text" name="guardian2_contact" id="guardian2_contact"
                                               class="form-control" placeholder="Enter Guardian 2 Contact">
                                    </div>

                                </div>
                            </div>

                            <!-- Guardian Details -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Guardian 3 Details</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Guardian 3  fields -->
                                    <!-- For example: -->
                                    <div class="form-group">
                                        <label for="guardian3_name">Guardian 3 Name</label>
                                        <input type="text" name="guardian3_name" id="guardian3_name"
                                               class="form-control" placeholder="Enter Guardian 3 Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian3_relation">Guardian 3 Relation</label>
                                        <input type="text" name="guardian3_relation" id="guardian3_relation"
                                               class="form-control" placeholder="Enter Guardian 3 relation">
                                    </div>

                                    <div class="form-group">
                                        <label for="guardian3_contact">Guardian 3 Contact</label>
                                        <input type="text" name="guardian3_contact" id="guardian3_contact"
                                               class="form-control" placeholder="Enter Guardian 3 Contact">
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

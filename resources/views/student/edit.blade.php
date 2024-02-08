@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Details Update</div>
                    <div class="card-body">
                        <form action="{{ url('students/' . $student->id) }}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" value="{{ $student->name }}"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="full_name">Name with Initial</label>
                                <input type="text" name="full_name" id="full_name" value="{{ $student->full_name }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ $student->dob }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" value="{{ $student->address }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact" value="{{ $student->contact }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ $student->email }}"
                                       class="form-control">
                            </div>

                            @include('partials.guardian_details', ['guardian' => $guardian1, 'number' => 1])
                            @include('partials.guardian_details', ['guardian' => $guardian2, 'number' => 2])
                            @include('partials.guardian_details', ['guardian' => $guardian3, 'number' => 3])


                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

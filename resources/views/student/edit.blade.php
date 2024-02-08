{{--@extends('student.layout')--}}
{{--@section('content')--}}


{{--    <div class="card-body" style="background: rgba(123, 177, 184, 0.774)">--}}
{{--        <h5 class="card-title text-center">Student Details Update</h5>--}}
{{--        <div class="mt-3">--}}
{{--            <form action="{{ url('students/' .$students->id) }}" method="post">--}}
{{--                {!! csrf_field() !!}--}}
{{--                @method("PATCH")--}}
{{--                --}}{{--            <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id"/>--}}
{{--                <label>Full Name</label></br>--}}
{{--                <input type="String" name="name" id="name" value="{{$student->name}}"--}}
{{--                       class="form-control"></br>--}}
{{--                <label>Name with Initial</label></br>--}}
{{--                <input type="String" name="full_name" id="full_name" value="{{$student->full_name}}"--}}
{{--                       class="form-control"></br>--}}
{{--                <label>Date of Birth</label></br>--}}
{{--                <input type="date" name="dob" id="date_of_birth" value="{{$student->dob}}"--}}
{{--                       class="form-control"></br>--}}
{{--                <label>Address</label></br>--}}
{{--                <input type="longtext" name="address" id="address" value="{{$student->address}}"--}}
{{--                       class="form-control"></br>--}}
{{--                <label>Contact</label></br>--}}
{{--                <input type="String" name="contact" id="contact" value="{{$student->contact}}"--}}
{{--                       class="form-control"></br>--}}
{{--                               <label>Email</label></br>--}}
{{--                <input type="String=" name="email" id="email" value="{{$student->email}}" class="form-control"></br>--}}


{{--                <input type="submit" value="Update" class="btn btn-success"></br>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}

@extends('student.layout')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Details Update</div>
                    <div class="card-body">
                        <form action="{{ url('students/' .$student->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <!-- Student Details -->
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="full_name">Name with Initial</label>
                                <input type="text" name="full_name" id="full_name" value="{{ $student->full_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ $student->dob }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact" value="{{ $student->contact }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ $student->email }}" class="form-control">
                            </div>

                            <!-- Guardian Details -->
                            <div class="card">
                                <div class="card-header">Guardian 1 Details</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Guardian 1 Name</label>
                                        <input type="text" name="guardian1_name" id="guardian1_name" value="{{ $guardian->guardian1_name }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 1 Relation</label>
                                        <input type="text" name="guardian1_relation" id="guardian1_relation" value="{{ $guardian->guardian1_relation }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 1 Contact</label>
                                        <input type="text" name="guardian1_contact" id="guardian1_contact" value="{{ $guardian->guardian1_contact }}" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="card mt-3">
                                <div class="card-header">Guardian 2 Details</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Guardian 2 Name</label>
                                        <input type="text" name="guardian2_name" id="guardian2_name" value="{{ $guardian->guardian2_name }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 2 Relation</label>
                                        <input type="text" name="guardian2_relation" id="guardian2_relation" value="{{ $guardian->guardian2_relation }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 2 Contact</label>
                                        <input type="text" name="guardian2_contact" id="guardian2_contact" value="{{ $guardian->guardian2_contact }}" class="form-control">
                                    </div>

                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">Guardian 3 Details</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Guardian 3 Name</label>
                                        <input type="text" name="guardian3_name" id="guardian3_name" value="{{ $guardian->guardian3_name }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 3 Relation</label>
                                        <input type="text" name="guardian3_relation" id="guardian3_relation" value="{{ $guardian->guardian3_relation }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Guardian 3 Contact</label>
                                        <input type="text" name="guardian3_contact" id="guardian3_contact" value="{{ $guardian->guardian3_contact }}" class="form-control">
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

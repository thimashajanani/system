@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Details Update</div>
                    <div class="card-body">
{{--                       <form action="{{ url('students/' . $student->id) }}" method="post" id="updateForm">--}}
                        <form action="{{ route('students.update', $student->id) }}" method="POST" id="updateForm">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" value="{{ $student->name ?? ''}}"
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
                            <button type="button" id="updateButton" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#updateButton').click(function () {
                var formData = $('#updateForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: $('#updateForm').attr('action'),
                    data: formData,
                    success: function (response) {
                        Swal.fire({
                            title: 'Update Success!',
                            text: response.message,
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            //
                            window.location.href = "{{route('students.index')}}"
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while updating data.',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });
        });
    </script>
@endsection



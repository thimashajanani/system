@extends('student.layout')
@section('content')

    <div class="card-body">
        <form action="{{route('students.store') }}" method="POST" id="myForm">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <label for="name">Name with Initial</label>
                <input type="text" name="full_name" id="full_name" class="form-control"
                       placeholder="Enter Name with Initial">
            </div>
            <div class="form-group">
                <label for="name">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control"
                       placeholder="Enter Date of Birth">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" name="address" id="address" class="form-control"
                       placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="name">Contact</label>
                <input type="text" name="contact" id="contact" class="form-control"
                       placeholder="Enter Contact">
            </div>
            <div class="form-group">
                <label for="name">Emile</label>
                <input type="text" name="email" id="email" class="form-control"
                       placeholder="Enter Email">
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Guardian 1 Details</h5>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="guardian1_name">Guardian 1 Name</label>
                        <input type="text" name="guardian1_name" id="guardian1_name"
                               class="form-control" placeholder="Enter Guardian 1 Name">
                    </div>

                    <div class="form-group">
                        <label for="guardian1_relation">Guardian 1 Relation</label>
                        <select class="form-control" name="guardian1_relation" id="guardian1_relation">
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="grandfather">Grandfather</option>
                            <option value="grandmother">Grandmother</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunt">Aunt</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="guardian1_contact">Guardian 1 Contact</label>
                        <input type="text" name="guardian1_contact" id="guardian1_contact"
                               class="form-control" placeholder="Enter Guardian 1 Contact">
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Guardian 2 Details</h5>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="guardian2_name">Guardian 1 Name</label>
                        <input type="text" name="guardian2_name" id="guardian2_name"
                               class="form-control" placeholder="Enter Guardian 2 Name">
                    </div>

                    <div class="form-group">
                        <label for="guardian2_relation">Guardian 2 Relation</label>
                        <select class="form-control" name="guardian2_relation" id="guardian2_relation">
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="grandfather">Grandfather</option>
                            <option value="grandmother">Grandmother</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunt">Aunt</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="guardian2_contact">Guardian 2 Contact</label>
                        <input type="text" name="guardian2_contact" id="guardian2_contact"
                               class="form-control" placeholder="Enter Guardian 2 Contact">
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Guardian 3 Details</h5>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="guardian3_name">Guardian 3 Name</label>
                        <input type="text" name="guardian3_name" id="guardian3_name"
                               class="form-control" placeholder="Enter Guardian 3 Name">
                    </div>

                    <div class="form-group">
                        <label for="guardian3_relation">Guardian 3 Relation</label>
                        <select class="form-control" name="guardian3_relation" id="guardian3_relation">
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="grandfather">Grandfather</option>
                            <option value="grandmother">Grandmother</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunt">Aunt</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="guardian3_contact">Guardian 3 Contact</label>
                        <input type="text" name="guardian3_contact" id="guardian3_contact"
                               class="form-control" placeholder="Enter Guardian 3 Contact">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3" id="btnSubmit">Submit</button>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (response) {
                        Swal.fire({
                            title: 'Good job!',
                            text: response.message,
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
                            cancelButtonClass: 'btn btn-danger w-xs mt-2',
                            buttonsStyling: false,
                            showCloseButton: true
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function (xhr, status, error) {
                        Swal.fire({
                            html: '<div class="mt-3">' + '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' + '<div class="mt-4 pt-2 fs-15">' + '<h4>' + JSON.parse(xhr.responseText).message + ' !</h4>' + '</div>' + '</div>',
                            showCancelButton: true,
                            showConfirmButton: false,
                            cancelButtonClass: 'btn btn-primary w-xs mb-1',
                            cancelButtonText: 'Dismiss',
                            buttonsStyling: false,
                            showCloseButton: true
                        }).then(() => {
                            // location.reload();
                        });
                    }
                });
            });
        });
    </script>
@endsection

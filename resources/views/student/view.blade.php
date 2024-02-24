@extends('student.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Student Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Personal Information</div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><strong>Full Name:</strong> {{ $student->name?? ''}}</li>
                                            <li class="list-group-item"><strong>Name with Initial:</strong> {{ $student->full_name }}</li>
                                            <li class="list-group-item"><strong>Date of Birth:</strong> {{ $student->dob }}</li>
                                            <li class="list-group-item"><strong>Address:</strong> {{ $student->address }}</li>
                                            <li class="list-group-item"><strong>Contact:</strong> {{ $student->contact }}</li>
                                            <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-header">Guardians</div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            @forelse($student->guardians as $guardian)
                                                <li class="list-group-item">{{ $guardian->name }}</li>
                                            @empty
                                                <li class="list-group-item">No guardians found</li>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

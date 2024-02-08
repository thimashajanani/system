@extends('layouts.app')
@section('content')


    <div class="card">
        <div class="card--header">Students Page</div>
        <div class="card-body">

            <div class="card-body">

                <h5 class="card-title">Full Name : {{  $student->name }}</h5>
                <h5 class="card-title">Name with initial : {{ $student->full_name}}</h5>
                <h5 class="card-text">Date of Birth : {{ $student->dob }}</h5>
                <h5 class="card-text">Address: {{ $student->address }}</h5>
                <h5 class="card-text">Contact: {{ $student->contact }}</h5>
                <h5 class="card-text">Email : {{ $student->email }}</h5>
                <h5 class="card-text mt-3">Guardians:</h5>
                <ul>
                    @foreach($student->guardians as $guardian)
                        <li>{{ $guardian->name }}</li>
                    @endforeach
                </ul>

{{--                <div class="card mt-3">--}}
{{--                    <div class="card-header">Guardians</div>--}}
{{--                    <div class="card-body">--}}
{{--                        @foreach($student->guardians as $guardian)--}}
{{--                            <h5 class="card-title">Guardian Name: {{ $guardian->name }}</h5>--}}
{{--                            <h5 class="card-text">Relationship: {{ $guardian->relationship }}</h5>--}}
{{--                            <h5 class="card-text">Contact: {{ $guardian->contact }}</h5>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            </hr>
        </div>
    </div>

    </body>
    </html>

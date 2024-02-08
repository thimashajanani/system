{{--@extends('guardian.layout')--}}
{{--@section('content')--}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Guardian Registration Form</title>
</head>

{{--<div class="card">--}}
{{--    <div class="card-header">Students Page</div>--}}
<div class="card-body">
    <form action="{{ route('guardians.store') }}" method="POST">
    {!! csrf_field() !!}

    <!-- Full Name -->
        {{--        <div class="form-group">--}}
        {{--            <label for="fullName">Full Name</label>--}}
        {{--            <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" required>--}}
        {{--        </div>--}}

        <label>Full Name</label></br>
        <input type="text" name="name" id="name" placeholder="Enter Full Name" class="form-control"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Number"></br>
        <label>Relationship</label></br>
        <input type="text" name="relationship" id="relationship" class="form-control" placeholder="Enter student to relation"></br>


        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
</div>
</div>


<!-- Bootstrap JS and Popper.js (Optional, but needed for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

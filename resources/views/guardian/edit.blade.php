@extends('guardian.layout')
@section('content')


    <div class="card-body" style="background: rgba(123, 177, 184, 0.774)">
        <h5 class="card-title text-center">Guardian Details Update</h5>
        <div class="mt-3">
            <form action="{{ url('guardians/' .$guardian->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Full Name</label></br>
                <input type="text" name="name" id="name" value="{{$guardian->name}}"
                       class="form-control"></br>
                <label>Contact</label></br>
                <input type="text" name="contact" id="contact" value="{{$guardian->contact}}"
                       class="form-control"></br>
                <label>Relationship</label></br>
                <input type="text" name="relationship" id="relationship" value="{{$guardian->relationship}}"
                       class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

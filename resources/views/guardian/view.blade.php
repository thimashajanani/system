@extends('layouts.app')
@section('content')


    <div class="card">
        <div class="card--header">Guardian Page</div>
        <div class="card-body">

            <div class="card-body">

                <h5 class="card-title">Full Name : {{  $guardian->name }}</h5>
                <h5 class="card-text">Contact: {{ $guardian->contact }}</h5>
                <h5 class="card-text">Relationship : {{ $guardian->relationship }}</h5>

            </div>
            </hr>
        </div>
    </div>

    </body>
    </html>

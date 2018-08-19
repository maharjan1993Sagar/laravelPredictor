@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('role'))
                <div class=”title m-b-md”>
                    You cannot access this page! This is for only {{session()->get('role')}} .”
                </div>
            @else
                <div class="title m-b-md">
                    Sorry You are not logged in with matched User Role.
                </div>
            @endif
        </div>
    </div>
@endsection
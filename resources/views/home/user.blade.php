@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Hello! <b>{{auth::user()->name}}</b>. Welcome to User Panel.
            </div>
        </div>
    </div>

@endsection
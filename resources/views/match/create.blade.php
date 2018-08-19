@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <h2>Create Match</h2>
        @if ($errors->any())
            <ul>  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif
        <form action="{{url('match')}}" method="post">
            {{csrf_field()}}
            <input name="user_id" value="{{auth::user()->id}}" type="number" style="display:none;">
            <div class="form-group">
                <label for="">Home Team</label>
                <input type="text" class="form-control" name="home_team">
            </div>
            <div class="form-group">
                <label for="">Away Team</label>
                <input type="text" class="form-control" name="away_team">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
@endSection
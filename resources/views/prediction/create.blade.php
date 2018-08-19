@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <form action="{{route('prediction.store')}}" method="post">
            {{csrf_field()}}
            <input type="number" name="user_id" value="{{auth::user()->id}}" style="display:none;">
            <input type="number" name="match_id" value="{{$match->id}}" style="display:none;">
            <div class="form-group">
                <label for="">{{$match->home_team}}</label>
                <input type="text" class="form-control" name="home_team_score">
            </div>
            <div class="form-group">
                <label for="">{{$match->away_team}}</label>
                <input type="text" class="form-control" name="away_team_score">

            </div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit">

</div>
        </form>
    </div>

@endsection
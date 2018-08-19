@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <form action="{{route('prediction.update',$prediction->id)}}" method="post">
            {{csrf_field()}}
            <input type="number" name="user_id" value="{{$prediction->user_id}}" style="display:none;">
            <input type="number" name="match_id" value="{{$prediction->match_id}}" style="display:none;">
            <div class="form-group">
                <label for="">{{$prediction->match->home_team}}</label>
                <input type="text" class="form-control" name="home_team_score" value="{{$prediction->home_team_score}}">
            </div>
            <div class="form-group">
                <label for="">{{$prediction->match->away_team}}</label>
                <input type="text" class="form-control" name="away_team_score" value="{{$prediction->away_team_score}}">

            </div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit">
</div>
        </form>
    </div>

    @endsection
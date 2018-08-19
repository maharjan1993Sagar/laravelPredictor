@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        <form action="{{route('matches.update',$match->id)}}" method="post">
            {{csrf_field()}}
            <input name='user_id' type="hidden" value="{{Auth::user()->id}}">
            <input name='id' type="hidden" value="{{$match->id}}">

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="home_team" value="{{$match->home_team}}">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="away_team" value="{{$match->away_team}}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" >
            </div>
        </form>
    </div>
@endSection
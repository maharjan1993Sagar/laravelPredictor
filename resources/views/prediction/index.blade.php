@extends('layouts.main')
@section('content')
    <div class="col-md-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}

            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Home Team Score</th>
                <th>Away Team Score</th>
                <th>Action</th>
            </tr>
            @foreach($predictions as $prediction)
                <tr>
                    <td>{{$prediction->match->home_team }}-{{$prediction->home_team_score}}</td>
                    <td>{{$prediction->match->away_team}}-{{$prediction->away_team_score}}</td>
                    <td><a href="{{route('prediction.edit',$prediction->id)}}">Edit</a>
                    | <a href="{{route('prediction.destroy',$prediction->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
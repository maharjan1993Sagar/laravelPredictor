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
              <th>Home Team</th>
              <th>Away Team</th>
              <th>Make Prediction</th>
          </tr>

        @foreach($matches as $match)
            <tr>
                <td>{{$match->home_team}}</td>
                <td>{{$match->away_team}}</td>
                @if(Auth::user()->role=="User")
                <td><a href="{{route('prediction.create',$match->id)}}" class="btn btn-default">Predict</a></td>
                    @elseif(Auth::user()->role=="Admin")
                    <td><a href="{{route('matches.edit',$match->id)}}" class="btn btn-default">Edit</a></td>
                    @endif
            </tr>

            @endforeach

        </table>
    </div>

    @endsection
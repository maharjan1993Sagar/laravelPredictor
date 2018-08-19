@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Users</h2>
            <table class="table table-responsive table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Permission</th>
                    <th>Action</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        @if($user->permission)
                            <td>Assigned</td>
                        @else
                            <td>Denied</td>
                        @endif
                        <td><a class="text text-success" href='{{route('user.assign',$user->id)}}'>Assign</a> |  <a class="text text-danger" href='{{route('user.deny',$user->id)}}'>Deny</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection
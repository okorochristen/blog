@extends('layout.master')
@section('title','home')
@section('content')
<table class="table table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>email</th>
            <th> Date Created</th>
        </tr>
    </thead> 
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$loop->index+1}} </td>
            <td>{{$user->name}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->created_at}} </td>
        
        </tr>
    @endforeach

    </tbody>

</table>
@endsection

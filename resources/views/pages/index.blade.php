@extends('layout.master')
@section('title','home')
@section('content')
<div class="container">
<table class="table table-responsive table striped table-border table-condensed" >
    <thead>
        <tr>
            <th>No</th>
            <th>title</th>
            <th>content</th>
            <th> Date Created</th>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$loop->index+1}} </td>
            <td>{{$user->title}} </td>
            <td>{{$user->content}} </td>
            <td>{{$user->created_at}} </td>


        </tr>
    @endforeach

    </tbody>

</table>
</div>
@endsection

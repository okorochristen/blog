@extends('layout.master')
@section('title','home')
@section('content')
<table class="table table-border">
    <thead>
        <tr>
            <th colspan="2">No</th>
            <th colspan="2">title</th>

            <th colspan="2">User</th>
            <th colspan="2">content</th>

            <th colspan="2">Date Created</th>

            <th colspan="9">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $post)
        <tr>
            <td colspan="2">{{$loop->index+1}} </td>
            <td colspan="2">{{$post->title}} </td>
            <td colspan="2">{{$post->user->name}} </td>
            <td colspan="2">{{$post->content}} </td>
             <td>{{$post->created_at}} </td>



            <td colspan="2"><a href="{{route('edit',$post->id)}}" class ="btn btn-primary">edit</a></td>

            <td colspan="2"><a href="{{ route('delete',$post->id)}}" class ="btn btn-danger">delete</a></td>

        </tr>

    @endforeach

    </tbody>

</table>
@endsection

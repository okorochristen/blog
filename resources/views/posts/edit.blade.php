@extends('layout.master')

@section('content')
<div class="container col-md-8">
<form method="post">
@csrf
<div>
    title <input type="text" name="title" value="{{$post->title}}"  class="form-control">
</div>

<br><br>

<div>
    content<textarea name="content" value="{{$post->content}}" class="form-control">{{$post->content}}</textarea>


</div>
<hr>
<input type="submit" class ="btn btn-primary" value="update">
@endsection

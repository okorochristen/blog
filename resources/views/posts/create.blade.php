@extends('layout.master')
@section('title','create')
@section('content')
<form method="post">
@csrf
<div>
    title <input type="text" name="title">
</div>

<br><br>

<div>
    content<textarea name="content"></textarea>


</div>
<input type="submit" value="submit">

@endsection
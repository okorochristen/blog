@extends('layout.master')
@section('title','create')
@section('content')
<div class="container col-md-8">
<form method="post">
@csrf
<div class="form-group">
        @if(session('status'))
        <div class="alert alert-success">{{
            session('status')
        }}</div>
        @endif
  <label>title</label><br>

    <input type="text" name="title" class="form-control">
</div>

<br><br>

  <div class="form-group">
    <label>content</label><br><textarea name="content"  class="form-control" ></textarea>


</div>
<input type="submit"  class ="btn btn-primary" value="submit">

</div>
@endsection

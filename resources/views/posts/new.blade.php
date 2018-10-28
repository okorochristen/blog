@extends('layout.master')
@section('title','create')
@section('content')
<div style="margin:0 auto;">
    @foreach($post as $post)
    <div class="media media-default">
    <div class="media-heading">
    <a href="{{route('details', $post->id)}}">{{$post->title}}</a>

    </div>
    </div>
    

   @endforeach
   </div>
   @endsection 
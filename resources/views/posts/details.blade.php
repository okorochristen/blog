@extends('layout.master')
@section('title' , 'create')
@section('content')
<div style="margin:0 auto;">
    <div class="panel panel-default">
        <div class="panel-heading">
            {{$post->title}}
            </div>
            <div class="panel-body">
            {{$post->content}}
            </div>
            <div class="paniel-heading">
            {{$post->user->name}} ---created at {{$post->created_at}}
            </div>

    </div>
</div>

@endsection
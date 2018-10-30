@extends('layout.master')
@section('title' , 'create')
@section('content')



<div class="container col-md-8">
<div style="margin:0 auto;">
    <div class="panel panel-default">
        <div class="panel-heading">

           <label for="input-id" class="col-sm-2">Title:</label>

            {{$post->title}}
         </div>
         <div class="panel-body">
            <label for="input-id" class="col-sm-2">Content:</label>
            {{$post->content}}
         </div>
         <div class="paniel-heading">
            <label for="input-id" class="col-sm-2">Author:</label>
            {{$post->user->name}} ---created at {{$post->created_at}}
         </div>

    </div>





</div>
                {{-- div for comment starts here --}}
                <div class="panel">
                    <h1>comments</h1>
                @if($post->comment  )

                @foreach($post->comment as $comment)




                                <div class="panel panel-default">
                                {{$comment->content}}
                                </div>

                                <div class="panel-footer">
                                commented by {{$comment->name}}
                                </div>
                @endforeach
                                @endif
                        </div>
                 {{-- div for comment ends here --}}

{{-- for error for unfilled form starts here --}}

            @if(count ($errors->all())>1)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endforeach

            @endif
{{-- for error for unfilled form ends here --}}


{{-- form starts here --}}
            <form method="post" action="{{ route('comment.add') }}" class="col-md-9">
                    @csrf

                <div class="form-group">
        {{-- for success starts here --}}
                            @if(session('status'))
                            <div class="alert alert-success">{{
                                session('status')
                            }}</div>
                            @endif
        {{-- for success ends here --}}

                            <label for="my-input"><h1>Add Comment</h1></label>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="text" placeholder="FullName"  name="name" class="form-control" >
                            <br>
                            <input type="email" placeholder="E-mail" name="email" class="form-control">
                            <br>
                            <textarea id="my-input" class="form-control" rows="3" col="60" placeholder="Message" name="content"></textarea>

                            <input class="btn btn-primary" type="submit" value="Add Comment">
                </div>
            </form>
 {{-- form ends here --}}



</div>



@endsection

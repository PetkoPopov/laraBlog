
@extends('layouts.app')
 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Posts</h1>
            @foreach($posts as $post) 
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('show_post',['post'=>$post->id])}}">{{$post->title}}</a>
                </div>

                <div class="card-body">
                    {{$post->short}}                   
                </div>
                <div class="card-footer">
                    Publish on ::
                    {{
                    
                    $post->created_at
                    }}
                    by {{$post->author->name}}                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection






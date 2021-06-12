

@extends('layouts.app')
 @section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            
            <div class="card">
                

                <div class="card-body">
                    {{$post->content}}                   
                </div>
                <div class="card-footer">
                    Publish on ::
                    {{
                    
                    $post->created_at
                    }}
                    by {{$post->author->name}}                    
                </div>
            </div>
       
        </div>
    </div>
</div>
@endsection
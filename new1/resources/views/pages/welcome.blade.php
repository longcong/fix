@extends('main')

@section('title', ' | Home Page')

@section('content')
        <div class="row" style="margin-top:20px;">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to my blog</h1>
                    <p class="lead">Thank you so much for visting</p>
                    <hr>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popalar Post</a>
                </div>
            </div>
            
        </div> <!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 100 ? "..." : " " }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                    <hr>
                @endforeach

            </div>
            <hr>

            <div class="col-md-3 col-md-offset-1" >
                <h3>Sidebar</h3>
            </div>
        </div>
@endsection



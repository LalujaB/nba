@extends('layout.master')

@section('title')
    NBA News
@endsection

@section('header-title')
    NBA News
@endsection

@section('content')

    @foreach ($news as $new)

        <div class="blog-post">
            <h2><a href="{{ route('single-news', ['id' => $new->id]) }}">{{$new->title}}</a></h2>
            <p>{{$new->content}}</p>
            <p>Author: {{$new->user->name}}</p>
            <hr>


        </div>

    @endforeach

    <nav>
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="{{$news->previousPageUrl()}}">Previous</a>
            <a class="btn btn-outline-secondary" href="{{$news->nextPageUrl()}}">Next</a>
        </nav>
    </nav>
@endsection
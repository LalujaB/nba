@extends('layout.master')

@section('title')
    {{$news->title}}
@endsection

@section('header-title')
    {{$news->title}}
@endsection

@section('content')



        <div class="blog-post">

            <p>{{$news->content}}</p>
            <p>Author: {{$news->user->name}}</p>

            <hr>
        </div>


@endsection
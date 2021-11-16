@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">
                {{$post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{$post->category->slug }}">{{$post->category->name}}</a></p>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3">
                <p>{!! $post->body !!}</p>
            </article>
            <a href="/blog" class="d-block mt-3"> Back </a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('container')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>By. <a href="" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/200x75?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/blog">back to posts</a>
        </div>
    </div>
   </div>
@endsection



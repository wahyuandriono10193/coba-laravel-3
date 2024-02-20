@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span>Back to all my post</a>
            <a href="" class="btn btn-success"> <span data-feather="edit"></span>edit</a>
            <a href="" class="btn btn-danger"> <span data-feather="x-circle"></span>delete</a>
            
            <img src="https://source.unsplash.com/200x75?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/blog">back to posts</a>
        </div>
    </div>
   </div>
@endsection
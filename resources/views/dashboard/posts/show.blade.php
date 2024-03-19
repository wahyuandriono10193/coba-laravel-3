@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span>Back to all my post</a>
            <a href="" class="btn btn-success"> <span data-feather="edit"></span>edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span>Delete</button>
              </form> 
              @if ($post->image)
              <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
            </div>
            @else
                <img src="https://source.unsplash.com/200x75?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/blog">back to posts</a>
        </div>
    </div>
   </div>
@endsection
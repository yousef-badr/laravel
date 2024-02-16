@extends('layouts.main')
@section('title','Show Posts')
@section('content')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Post</th>
            <th>Writer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Soft Delete</button>
                    </form>
                </td>
            </tr>
    @endforeach
@endsection

@extends('layouts.main')
@section('title','Create Post')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Enter Post Your Information
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Create post</label>
                                <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                            </div>
                            <div >
                                <label for="enabled">Enabled</label>
                                <input type="checkbox"  id="enabled" name="enabled" value="1" {{ $post->enabled ? 'checked' : '' }}>
                            </div>
                            <div>
                                <input type="datetime-local" name="published_at" placeholder="Published At">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="photo" value="{{ $post->image }}">
                            </div>
{{--                            <select name="user_id">--}}
{{--                                @foreach ($users as $user)--}}
{{--                                    <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{ $user->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

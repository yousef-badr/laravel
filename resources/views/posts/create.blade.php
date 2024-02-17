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
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" required>
                            </div>
                            <div class="form-group">
                                <label for="body">Create post</label>
                                <textarea class="form-control" id="body" name="body" placeholder="Enter Post" required></textarea>
                            </div>
                            <div >
                                <label for="enabled">Enabled</label>
                                <input type="checkbox"  id="enabled" name="enabled" value="1">
                            </div>
                            <div>
                            <input type="datetime-local" name="published_at" placeholder="Published At">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="photo">
                            </div>
{{--                            <select name="user_id">--}}
{{--                                @foreach ($users as $user)--}}
{{--                                    <option value="{{ $user->id }}">{{ $user->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <select class="form-select" aria-label="Default select example">--}}
{{--                                <option selected>Select one of this users</option>--}}
{{--                                @foreach($posts as $post)--}}
{{--                                <option value="{{$post->user->name}}">{{$post->user->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

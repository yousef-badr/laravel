@extends('layouts.main')
@section('title','Edit user')
@section('content')
    <form action="{{route("users.update",$users->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{$users->name}}"><br><br>
    <input type="text" name="body" value="{{$users->email}}"><br><br>
    <button type="submit">Update</button>
</form>
@endsection

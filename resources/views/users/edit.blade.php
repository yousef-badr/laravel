@extends('layouts.main')
@section('title','Edit user')
@section('content')
    <form action="{{route("users.update",$users->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{$users->name}}" required><br><br>
    <input type="text" name="email" value="{{$users->email}}" required><br><br>
    <button type="submit">Update</button>
</form>
@endsection

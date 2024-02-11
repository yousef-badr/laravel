@extends('layouts.main')
@section('title','Show user')
@section('content')
    <form action="{{route("users.show",$users->id)}}" method="get">
        @csrf
        <input type="text" name="title" value="{{$users->name}}"><br><br>
        <input type="text" name="body" value="{{$users->email}}"><br><br>
        <button type="button"><a href="{{route('users.index')}}">Back</a></button>
    </form>
@endsection

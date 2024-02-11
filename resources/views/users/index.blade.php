@extends('layouts.main')
@section('title','List Users')
@section('content')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <form>
                <td>{{ $user->id }}</td>
                <td><a href="{{route('users.show',$user->id)}}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>
                <a href="{{route('users.edit',$user->id)}}">Edit</a>
                <form action="{{route('users.destroy',$user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> Soft Delete</button>
                </form>
                </td>
            </tr>
            </form>
        @endforeach
        </tbody>
    </table>
@endsection


@extends('layouts.app')
@section('title', 'User')

@section('content')
    <h3>User</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $no => $u)
            {{$user->firstItem()}}
            <tr>
                <th scope="row">{{ $user->firstItem() + $no }}</th>
                <td>{{ $u->name }}</td>
                <td>{{$u->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <span class="float-right">
        {{ $user->links() }}
    </span>
@endsection

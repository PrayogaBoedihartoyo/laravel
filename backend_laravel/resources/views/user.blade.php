@extends('layouts.app')
@section('title', 'User')

@section('content')
    <h3>Halaman User</h3>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-inline float-right" method="GET" action="/search">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
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

@extends('layouts.app')

@section('title', 'Users List')

@section('content')
<main>
<h2>Users</h2>
<ol>
    @foreach ($users as $user)
      @if ($user->id == session('user_id'))
      <li><a href="/users/{{ session('user_id') }}">{{$user->username}} (You)</a></li>

      @else
        <li>
          <a href="/users/{{ $user->id }}">{{$user->username}}</a>
        </li>
      @endif
    @endforeach
</ol>

<button onclick="window.location.href='/logout'">Log out</button>
</main>

@endsection

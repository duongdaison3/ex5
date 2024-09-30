@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<main>
<h2>Hello, {{ $user->username }}</h2>

<p><strong>Full Name:</strong> {{ $user->fullname }}</p>
<p><strong>Profile Image:</strong></p>
@if ($user->image != null) 
  <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" style="max-width: 200px;">
@else
  <span>No image uploaded</span>
@endif

<p><strong>Registered at:</strong> {{ $user->created_at }}</p>

<a href="/users">View users list</a>
<br>
<button 
  onclick="window.location.href='/logout'" 
  style="margin-top: 10px;"
>
  Log out
</button>
</main>
@endsection
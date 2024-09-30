@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h2>Login</h2>

<form action="/login" method="POST">
  @csrf
  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
  </div>

  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
  </div>

  <button type="submit">Login</button>
  <a href="{{ route('register') }}" style="display: block; margin-top: 10px">Don't have an account? Register here!</a>

</form>

@if ($errors->any())
<div>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

@if (session('error'))
<div style="color: red;">
  <p>{{ session('error') }}</p>
</div>
@endif
@endsection
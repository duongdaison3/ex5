@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h2>Register a New Account</h2>

<form action="/register" method="POST">
    @csrf
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname">
    </div>

    <div>
        <label for="image">Profile Image:</label>
        <input type="file" name="image" id="image">
    </div>

    <button type="submit">Register</button>
  <a href="{{ route('login') }}" style="display: block; margin-top: 10px">Already have an account? Login here!</a>

</form>

@if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

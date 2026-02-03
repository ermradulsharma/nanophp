@extends('layouts.app')

@section('content')
<div class="auth-container">
    <h2>Login</h2>
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="/register">Register</a></p>
</div>
@endsection
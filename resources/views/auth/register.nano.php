@extends('layouts.app')

@section('content')
<div class="auth-container">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Register</button>
    </form>
</div>
@endsection
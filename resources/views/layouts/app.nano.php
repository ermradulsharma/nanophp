<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NanoPHP Auth</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0f172a;
            color: #f8fafc;
            margin: 0;
        }

        nav {
            background: #1e293b;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #38bdf8;
            text-decoration: none;
            margin-left: 1rem;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #1e293b;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }

        .auth-container h2 {
            color: #38bdf8;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 4px;
            color: white;
            box-sizing: border-box;
        }

        button {
            background: #38bdf8;
            color: #0f172a;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover {
            background: #7dd3fc;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo"><a href="/">NanoPHP</a></div>
        <div class="links">
            @if(Core\Facades\Auth::check())
            <span>Welcome, {{ Core\Facades\Auth::user()->name }}</span>
            <a href="/logout">Logout</a>
            @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            @endif
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>